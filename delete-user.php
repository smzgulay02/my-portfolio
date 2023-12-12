<?php 

	$data = $_POST;
	$user_id = (int) $data['user_id'];
	$user_id = $data['f_name'];
	$user_id = $data['l_name'];

	// Adding the record.
	try{
		$command = "DELETE FROM users WHERE id={$user_id}";
		include('connection.php');

		$conn->exec($command);

	echo json_encode([
			'success' => true,
			'message' => $first_name . ' ' . $last_name . ' successfully deleted.'
		]);

		}	catch (PDOException $e) {
			echo json_encode([
			'success' => false,
			'message' => 'Error processing your request!'
		]);
		}