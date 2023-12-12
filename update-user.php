<?php 

	$data = $_POST;
	$user_id = (int) $data['userId'];
	$first_name = $data['f_name'];
	$last_name = $data['l_name'];
	$email = $data['email'];
	// Adding the record.
	try{
		$sql->"UPDATE users SET email=?, first_name=?, last_name=?, updated_at=? WHERE id=?";
		include('connection.php');
		$conn->prepare($sql)->execute([$email, $first_name, $last_name, NOW(), $user_id]);

		$conn->exec($command);

	echo json_encode([
			'success' => true,
			'message' => $first_name . ' ' . $last_name . ' successfully updated.'
		]);

		}	catch (PDOException $e) {
			echo json_encode([
			'success' => false,
			'message' => 'Error processing your request!'
		]);
		}