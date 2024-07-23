<?php
function createUser($name, $email, $role) {
	//Logika Pembuatan pengguna
	return "User created with Name : $name, Email: $email, Role: $role";
}

// Menggunakan named arguments
echo createUser(name: 'Bambang', email: 'bambang@example.com', role: 'admin');


?>
