# IDA Academy - Dockerized PHP Web Application

IDA Academy is a full-stack PHP web application designed and deployed using modern DevOps practices. The project demonstrates how a traditional web application can be transformed into a production-ready system using Docker, Nginx, and MySQL, and deployed on a cloud virtual machine (AWS EC2 / Azure VM).

---

## 🚀 Project Overview

This application is a simple academy management system that includes user authentication and basic administration features. Users can register, log in, and access a protected dashboard. An admin view is also available to display all registered users stored in the database.

The main goal of this project was not just to build a working application, but to understand how real-world applications are deployed, containerized, and managed in a cloud environment.

---

## 🏗️ System Architecture

The application follows a container-based microservice-style architecture:

Each component runs in its own Docker container and communicates through Docker networking.

---

## 🧰 Technology Stack

- PHP 8+ (Application Layer)
- MySQL 8 (Database Layer)
- Nginx (Web Server / Reverse Proxy)
- Docker & Docker Compose (Containerization)
- Linux (Ubuntu on AWS/Azure VM)
- Certbot (SSL certificate setup for HTTPS)
- Git (Version control and branching workflow)

---

## ⚙️ Key Features

- User registration system
- Secure login and logout functionality
- Session-based authentication
- Protected user dashboard
- Admin page to view all registered users
- MySQL database integration
- Fully containerized environment using Docker Compose
- Nginx reverse proxy routing requests to PHP application
- Cloud deployment on a virtual machine (AWS EC2 / Azure VM)

---

## 🔐 Authentication Flow

1. User registers an account via the registration page
2. Credentials are stored in the MySQL database
3. User logs in using registered credentials
4. PHP sessions are used to maintain login state
5. Access to dashboard is restricted to authenticated users only
6. Logout clears session and redirects user to login page

---

## 🐳 Docker Setup

The entire application is containerized using Docker Compose:

- Nginx container handles incoming HTTP requests
- PHP container processes application logic
- MySQL container stores all user data

All containers communicate through an internal Docker network, making the system portable and easy to deploy across different environments.

---

## ☁️ Deployment (Cloud Environment)

The application was deployed on a cloud virtual machine (AWS EC2 / Azure VM) using the following steps:

- Installed Docker and Docker Compose on the VM
- Cloned the project repository
- Built and started containers using Docker Compose
- Configured firewall/security groups to allow HTTP and HTTPS traffic
- Set up domain mapping using DuckDNS
- Configured SSL certificates using Let’s Encrypt (Certbot)

---

## 🧠 What I Learned

This project helped me understand and implement real DevOps and backend engineering concepts such as:

- Containerization of applications using Docker
- Multi-service architecture using Docker Compose
- Reverse proxy configuration with Nginx
- Backend-to-database communication in isolated environments
- Cloud deployment on AWS/Azure virtual machines
- Networking and port exposure in containerized systems
- Git branching workflow (dev vs main environment separation)
- Debugging real-world deployment issues (404 errors, SSL issues, database connectivity)

---

## 📌 Purpose of the Project

The purpose of this project is to simulate a real production environment where:

- Applications are modular and containerized
- Infrastructure is reproducible and scalable
- Deployment can be moved between cloud providers easily
- Development and production environments are separated

---

## 🚀 Future Improvements

- Add CI/CD pipeline using GitHub Actions
- Implement role-based access control (Admin/User separation)
- Improve UI with modern frontend framework
- Add API layer for scalability
- Implement monitoring and logging system
- Deploy using Kubernetes for orchestration at scale

---

## 👨‍💻 Summary

This project represents a complete DevOps workflow from development to deployment. It demonstrates how a PHP application can be containerized, deployed on a cloud VM, and managed using modern infrastructure tools.

It is a step toward understanding real-world production systems used in software engineering and DevOps environments.
