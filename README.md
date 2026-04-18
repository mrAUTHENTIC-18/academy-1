# IDA Academy - Dockerized PHP Web Application

IDA Academy is a containerized PHP web application built using Docker, Nginx, and MySQL. It demonstrates real-world DevOps practices such as container orchestration, reverse proxy configuration, and cloud deployment on AWS/Azure virtual machines.

---

## 🚀 Project Overview

This application is a simple authentication system where users can register, log in, and access a protected dashboard. The system uses session-based authentication and stores user data in a MySQL database.

The project focuses on understanding how to deploy and manage a full-stack application using containerized services in a cloud environment.

---

## 🏗️ System Architecture
Browser
↓
Nginx (Reverse Proxy)
↓
PHP Application (Backend)
↓
MySQL Database

---

## 🧰 Technology Stack

- PHP 8+
- MySQL 8
- Nginx
- Docker & Docker Compose
- Ubuntu (AWS EC2 / Azure VM)
- Git & GitHub

---

## ⚙️ Features

- User registration system
- User login/logout functionality
- Session-based authentication
- Protected dashboard page
- MySQL database integration
- Fully containerized setup using Docker Compose
- Nginx reverse proxy for request handling

---

## 🐳 Docker Setup

The application runs using three main services:

- Nginx → handles HTTP requests
- PHP App → processes application logic
- MySQL → stores user data

All services communicate through Docker networking.

---

## ☁️ Deployment

The application was deployed on a cloud virtual machine (AWS EC2 / Azure VM) using Docker Compose.

Steps include:

- Installing Docker on VM
- Cloning repository
- Running containers using `docker-compose up`
- Opening required ports (80/443/8000)
- Configuring domain and optional SSL setup

---

## 🧠 What I Learned

- Docker containerization and orchestration
- Nginx reverse proxy setup
- PHP backend development
- MySQL database integration
- Cloud VM deployment (AWS/Azure)
- Networking and port configuration
- Debugging real-world deployment issues
- Git workflow (dev vs main branch)

---

## 🚀 Future Improvements

- Add role-based authentication (Admin/User)
- Build admin dashboard for managing users
- Add CI/CD pipeline using GitHub Actions
- Improve UI with modern frontend framework
- Add API layer for scalability
- Implement monitoring and logging tools
