<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '8, 9, 7, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8, 11',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '5, 8',
			'diff' => '6',//count diff: 1
		],
		'win amount' => 83,
		'qin amount' => 321,
		'trio amount' => 325,
		'place amount' => [
			8 => 28.5,
			9 => 27.5,
			7 => 15.5,
		],
		'win inter' => '1, 5, 8',
		'win inter 2' => '5, 8',//count win inter 2: 2
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 285,
			'place(end-wp )' => '8',
			'2 won(place bet)' => 285,
			'super sure bet' => 'super sure place 8',
			'5 won(place bet)' => 285,
		],
		'total bets' => 300,
		'wp' => '5, 7, 8',//count wp: 3
		'total won in race 1' => 555,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 7, 12',
		'runners' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 7, 5, 6',
		'suggestions' => [
			'win' => '4, 5, 7, 9, 12',
			'qin' => '2, 4, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '5, 7, 12',
			'diff' => '11',//count diff: 1
		],
		'win amount' => 295,
		'qin amount' => 499.5,
		'trio amount' => 1165,
		'place amount' => [
			9 => 67,
			7 => 16,
			5 => 24,
		],
		'win inter' => '6, 7, 12',
		'win inter 2' => '9',//count win inter 2: 1
		'allValues' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites )' => '12',
			'super sure bet' => 'super sure place 12',
		],
		'total bets' => 200,
		'wp' => '5, 7',//count wp: 2
		'total won in race 2' => -200,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 8, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 8, 6, 2',
		'suggestions' => [
			'win' => '3, 4, 5, 8, 9, 11, 12',
			'qin' => '1, 3, 4, 5, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '8, 9, 11',
			'diff' => '',//count diff: 0
		],
		'win amount' => 82,
		'qin amount' => 145,
		'trio amount' => 174,
		'place amount' => [
			4 => 22.5,
			8 => 15,
			6 => 18.5,
		],
		'win inter' => '3',
		'win inter 2' => '4',//count win inter 2: 1
		'allValues' => '1, 2, 3, 5, 6, 7',
		'bets' => [
			'place(end-favorites )' => '11',
			'place(wp )' => '6',
			'3 won(place bet 6)' => 555,
		],
		'total bets' => 400,
		'wp' => '6',//count wp: 1
		'total won in race 3' => 155,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 5, 2, 11',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 139,
		'qin amount' => 235.5,
		'trio amount' => 586,
		'place amount' => [
			10 => 41,
			5 => 15,
			2 => 25.5,
		],
		'win inter' => '1, 2, 5, 6, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '11',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 4, 8, 9',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8, 9, 11',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count trio: 11
			'inter' => '2, 3, 5',
			'diff' => '10',//count diff: 1
		],
		'win amount' => 87.5,
		'qin amount' => 204.5,
		'trio amount' => 1848,
		'place amount' => [
			3 => 20.5,
			4 => 19,
			8 => 98,
		],
		'win inter' => '1, 2, 4',
		'win inter 2' => '3',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'place(end-favorites )' => '5',
			'place(end-wp )' => '5',
		],
		'total bets' => 200,
		'wp' => '2, 3, 5',//count wp: 3
		'total won in race 5' => -200,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 3, 6, 5',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 121.5,
		'qin amount' => 926,
		'trio amount' => 305,
		'place amount' => [
			1 => 26,
			3 => 37.5,
			6 => 11,
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 8, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 4, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 8, 4, 12',
		'suggestions' => [
			'win' => '2, 4, 10',
			'qin' => '1, 2, 4, 7, 8, 10',
			'trio' => '1, 2, 4, 5, 7, 8, 10',//count trio: 7
			'inter' => '2, 4',
			'diff' => '3, 6, 9, 11, 12',//count diff: 5
		],
		'win amount' => 133.5,
		'qin amount' => 886.5,
		'trio amount' => 1394,
		'place amount' => [
			10 => 38.5,
			8 => 39,
			4 => 18,
		],
		'win inter' => '2',
		'win inter 2' => '10',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites )' => '12',
		],
		'total bets' => 100,
		'wp' => '2, 4',//count wp: 2
		'total won in race 7' => -100,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 5, 6, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 6, 4, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 5, 6, 8, 9',
			'diff' => '',//count diff: 0
		],
		'win amount' => 31.5,
		'qin amount' => 152.5,
		'trio amount' => 1346,
		'place amount' => [
			5 => 14,
			6 => 29.5,
			4 => 46.5,
		],
		'win inter' => '',
		'win inter 2' => '5',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5, 6, 8',//count wp: 4
	],
];
//total place end favorites: -215
//total place end wp: 85
//total place wp: 255
//total sure place: 85
//total win: 0
//total place union: 0
//total: 210
