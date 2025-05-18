require('dotenv').config();
const express = require('express');
const mysql = require('mysql2/promise');
const bcrypt = require('bcryptjs');
const bodyParser = require('body-parser');
const path = require('path'); // Importar módulo path
const app = express();
const PORT = process.env.PORT || 3000;
const cors = require('cors');
const { join } = path;
// Middlewares
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.json());
app.use(express.static(path.join(__dirname, "frontend/public"))); // CSS/JS/Imágenes
app.use(express.static(path.join(__dirname, "frontend/views"))); // HTML
app.use(cors({origin: process.env.VERCEL_URL || '*'  }));
app.use(cors());
app.use(express.json());
app.use(express.static(path.join(__dirname, "frontend/public")));
// Conexión a MySQL
const pool = mysql.createPool({
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME,
  waitForConnections: true,
  connectionLimit: 10
});

// Rutas
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'frontend/views/index.html'));
});

app.get("/registro", (req, res) => {
  res.sendFile(join(__dirname, "frontend/views/auth/registro.html"));
});
app.get("/login", (req, res) => {
  res.sendFile(join(__dirname, "frontend/views/auth/login.html"));
});
app.get("/student/panel", (req, res) => {
  res.sendFile(join(__dirname, "frontend/views/student/estudiante_panel.html"));
});

app.post('/registro', async (req, res) => {
  try {
    const { parentName, email, password, confirmPassword, studentName } = req.body;
    
    // Validación básica
    if (!studentName) {
      return res.status(400).send('El nombre del estudiante es obligatorio');
    }

    if (password !== confirmPassword) {
      return res.status(400).send('Las contraseñas no coinciden');
    }

    // Hash de la contraseña
    const hashedPassword = await bcrypt.hash(password, 10);

    // Guardar en MySQL
    const [result] = await pool.query(
      'INSERT INTO families (parent_name, email, password_hash, student_name) VALUES (?, ?, ?, ?)',
      [parentName, email, hashedPassword, studentName]
    );
    res.send('Registro exitoso!');
  } catch (error) {
    console.error(error);
    res.status(500).send('Error en el servidor');
  }
});

app.post('/login', async (req, res) => {
  try {
    const { email, password } = req.body;

    // Validación básica
    if (!email || !password) {
      return res.status(400).send('Email y contraseña son obligatorios');
    }

    // Consultar en MySQL
    const [rows] = await pool.query('SELECT * FROM families WHERE email = ?', [email]);
    if (rows.length === 0) {
      return res.status(401).send('Email o contraseña incorrectos');
    }

    const user = rows[0];
    
    // Comparar contraseñas
    const match = await bcrypt.compare(password, user.password_hash);
    if (!match) {
      return res.status(401).send('Email o contraseña incorrectos');
    }
    
    const nombre = encodeURIComponent(user.parent_name);  
    return res.redirect(`/student/panel?name=${nombre}`);




} catch (err) {
    console.error(err);
    res.status(500).send('Error en el servidor');
  }
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`Servidor en http://localhost:${process.env.PORT}`);
});
