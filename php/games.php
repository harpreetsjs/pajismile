<?php

	function getGames()	{
		$games = '[
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
			},
			{
				"file": "dhinchak-pooja.php",
				"image":"dhinchak_pooja.jpg",
				"caption": "Which lines does Dhinchak Pooja wants to say to you?",
				"id": "2"
			},
			{
				"file": "bollywoodcrush.php",
				"image":"bollycrush-thumb.gif",
				"caption": "Which Bollywood celebrity is going to propose you?",
				"id":"4"
			},
			{
				"file": "luckyforfriends.php",
				"image":"luckyforfriends.gif",
				"caption": "How much lucky are you for your friends?",
				"id":"5"
			}

		]';
		return json_decode($games, true);;
	}
