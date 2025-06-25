<?php
header("Content-Type: text/css");
?>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
}

input, select, button {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

button:hover {
    background-color: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

a {
    color: #007bff;
    text-decoration: none;
    margin: 0 5px;
}

a:hover {
    text-decoration: underline;
}

.actions a {
    display: inline-block;
    margin-right: 8px;
}

a.button-link {
    display: inline-block;
    margin-top: 20px;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 4px;
    text-decoration: none;
}

a.button-link:hover {
    background-color: #0056b3;
}

.error {
    color: red;
}

.success {
    color: green;
}
.actions {
    display: flex;
    gap: 5px;
    flex-wrap: wrap;
}

.actions form {
    margin: 0;
}

.btn {
    padding: 6px 10px;
    font-size: 0.9em;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.btn-edit {
    background-color: #007bff;
    color: white;
}

.btn-edit:hover {
    background-color: #0056b3;
}

.btn-delete {
    background-color: #dc3545;
    color: white;
}

.btn-delete:hover {
    background-color: #b02a37;
}

/* Tabla responsive */
.table-responsive {
    width: 100%;
    overflow-x: auto;
}

.table-responsive table {
    min-width: 600px; /* evita que se comprima demasiado */
}
