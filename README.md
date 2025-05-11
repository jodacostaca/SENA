# Kids Club

## Descripción
Kids Club es una plataforma web para la gestión de tutorías escolares. Permite a las familias registrarse, iniciar sesión y acceder a un panel personalizado donde pueden ver información de sus hijos y agendar sesiones con docentes.

## Características principales
- Registro de usuarios familiares con correo electrónico y contraseña segura (bcrypt).
- Inicio de sesión con validación y redirección al panel de estudiante.
- Panel de estudiante que muestra mensajes personalizados.
- Backend en Node.js y Express.
- Base de datos MySQL para almacenar familias, estudiantes y sesiones.
- Comunicación a través de HTTPS y APIs REST.

## Requisitos mínimos
- Node.js v14.x o superior  
- MySQL 5.7 / 8.0  
- Git  
- Navegador moderno (Chrome, Firefox, Edge, Safari)

## Instalación paso a paso
1. Clonar repositorio  
   ```
   git clone https://github.com/jodacostaca/SENA
   cd kidsclub-backend
   ```
2. Configurar variables de entorno  
   ```
   cp .env.example .env
   ```  
   Editar `.env` con las credenciales:
   ```
   PORT=3000
   DB_HOST=localhost
   DB_USER=root
   DB_PASSWORD=tu_contraseña
   DB_NAME=data_base_kids_club
   ```
3. Instalar dependencias  
   ```
   npm install
   ```
4. Importar esquema SQL  
   ```
   mysql -u root -p data_base_kids_club < data_base_kids_club.sql
   ```
5. Iniciar servidor  
   ```
   npm start
   ```
6. Verificar funcionamiento  
   - Registro: http://localhost:3000/registro  
   - Login:    http://localhost:3000/login  
   - Panel:    http://localhost:3000/student/panel?name=<TuNombre>

## Uso
Al iniciar sesión, el sistema muestra un banner con el mensaje:
> Bienvenido, <TuNombre>!

## Estructura de carpetas
```
kidsclub-backend/
├─ .env
├─ package.json
├─ server.js
└─ frontend/
   ├─ public/
   └─ views/
      ├─ auth/
      │  ├─ login.html
      │  └─ registro.html
      └─ student/
         └─ estudiante_panel.html
```

## Contribuciones
1. Haz un fork de este repositorio.  
2. Crea una rama `feature/nueva-funcionalidad`.  
3. Haz commit de tus cambios.  
4. Abre un Pull Request.

## Licencia
Este proyecto se distribuye bajo la Licencia MIT. Consulte el archivo LICENSE para más detalles.

