-- Generated by Mocodo 4.1.2

-- Création de la base de données
CREATE DATABASE IF NOT EXISTS podcast;

-- Utilisation de la base de données
USE podcast;

CREATE TABLE IF NOT EXISTS comments (
  id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  content     TEXT NOT NULL,
  created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS podcasts (
  id     BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  descri      TEXT NOT NULL,
  excerpt     VARCHAR(300),
  link        VARCHAR(150),
  created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  comm_id BIGINT UNSIGNED,
  FOREIGN KEY (comm_id) REFERENCES comments (id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS categories (
  id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  pod_id BIGINT UNSIGNED,
  FOREIGN KEY (pod_id) REFERENCES podcasts (id) ON DELETE SET NULL
);



