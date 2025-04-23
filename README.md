<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 📚 API de Biblioteca Laravel

Esta API permite gestionar libros y registrar préstamos en una biblioteca. Está desarrollada con Laravel siguiendo los principios de la arquitectura orientada a objetos.

---

## 📦 Funcionalidades disponibles

### 1. Listar Libros

- **Método:** `GET`
- **Ruta:** `/api/libros`
- **Descripción:** Devuelve un listado de todos los libros.

**Ejemplo de respuesta:**
```json
[
  {
    "id": 1,
    "nombre": "Laravel desde cero",
    "codigo": "LAR001",
    "autor": "Juan Pérez"
  }
]
```

---

### 2. Registrar Libro

- **Método:** `POST`
- **Ruta:** `/api/libros`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "nombre": "Introducción a Laravel",
  "codigo": "LAR002",
  "autor": "Edwin Dev"
}
```

**Respuesta esperada:**
- Código: `201 Created`
- Contenido: Libro registrado.

---

### 3. Actualizar Libro

- **Método:** `PUT`
- **Ruta:** `/api/libros/{id}`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "nombre": "Laravel avanzado",
  "codigo": "LAR003",
  "autor": "Edwin Actualizado"
}
```

**Respuesta esperada:**
- Código: `200 OK`
- Contenido: Libro actualizado.

---

### 4. Registrar Préstamo

- **Método:** `POST`
- **Ruta:** `/api/prestamos`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "fecha": "2025-04-23",
  "lector": "Ana Martínez",
  "libro_id": 1
}
```

**Respuesta esperada:**
- Código: `201 Created`
- Contenido: Préstamo registrado.

---

## 🛠 Requisitos

- PHP >= 8.2.12
- Composer
- Laravel 12
- MySQL
- Postman (para pruebas)

---

## 📂 Organización del Código

- **Controllers:** Lógica de control de la API.
- **Requests:** Validaciones personalizadas.
- **Services:** Lógica de negocio (registro, edición, validación).
- **Models:** Mapeo de entidades `Libro` y `Prestamo`.

---

## 💡 Notas

- Asegúrate de tener las migraciones ejecutadas (`php artisan migrate`).
- Verifica que las tablas `libro` y `prestamo` existen y están correctamente nombradas.
- Las relaciones están definidas entre `Libro` y `Prestamo`.

---

## 📸 Capturas recomendadas

Agrega capturas de pantalla desde Postman para las siguientes acciones:

- `GET /api/libros`
- `POST /api/libros`
- `PUT /api/libros/{id}`
- `POST /api/prestamos`

Incluye la solicitud y la respuesta para demostrar el correcto funcionamiento.

---

## 👨‍💻 Autor

Desarrollado por: Kevin Zanga  
Fecha: 23 de Abril 2025
