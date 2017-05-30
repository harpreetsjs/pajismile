<?php

	function getGames()	{
		$games = '[
			{
				"file": "dhinchak-pooja.php",
				"image":"dhinchak_pooja.jpg",
				"caption": "Which lines does Dhinchak Pooja wants to say to you?",
				"id": "2"
			},
			{
				"file": "baba-says.php",
				"image":"baba.jpg",
				"caption": "What Om Swami think\'s about you?",
				"id": "1"
			},
			{
				"file": "foodie.php",
				"image":"foodie.jpg",
				"caption": "Which Indian food business you should start in US?",
				"id":"3"
			}

		]';
		return json_decode($games, true);;
	}
