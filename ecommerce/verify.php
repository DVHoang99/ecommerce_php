<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
					 $validPassword = password_verify($password, $row['password']);
					if($validPassword){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}			
					else{
						$_SESSION['error'] = 'Sai mật khẩu hoặc tài khoản';
					}
			}
			else{
				$_SESSION['error'] = 'không tìm thấy email';
			}
		}
		catch(PDOException $e){
			echo "Lỗi kết nối " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = '';
	}

	$pdo->close();

	header('location: login.php');

?>