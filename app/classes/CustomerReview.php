<?php

			namespace App\classes;

			class CustomerReview
			{
						public $review = [];

						public function __construct()
						{
									$this->review = [
													0 => [
																	'name' => 'Mizanur Rahman Azhari',
																	'opinion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. '
													],
													1 => [
																	'name' => 'Mehmet Bozdağ',
																	'opinion' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover. '
													],
													2 => [
																	'name' => 'Hayreddin Barbarossa',
																	'opinion' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'
													]
									];
						}

						public function getAllReview()
						{
									return $this->review;
						}
			}