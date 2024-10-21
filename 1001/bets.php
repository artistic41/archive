<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 5, 6, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '5, 2, 9, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count trio: 11
			'inter' => '4, 5, 6, 10',
			'diff' => '',//count diff: 0
		],
		'win amount' => 61.5,
		'qin amount' => 135.5,
		'trio amount' => 258,
		'place amount' => [
			5 => 20.5,
			2 => 15,
			9 => 21.5,
		],
		'win inter' => '1, 4',
		'win inter 2' => '5',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'place(end-favorites )' => '10',
		],
		'total bets' => 100,
		'wp' => '4, 5, 6, 10',//count wp: 4
		'total won in race 1' => -100,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '4, 9, 2, 6',
		'suggestions' => [
			'win' => '4',
			'qin' => '4, 8, 9',
			'trio' => '1, 2, 4, 8, 9',//count trio: 5
			'inter' => '',
			'diff' => '3, 5, 6, 7, 10, 11',//count diff: 6
		],
		'win amount' => 154,
		'qin amount' => 893.5,
		'trio amount' => 1351,
		'place amount' => [
			4 => 41.5,
			9 => 33.5,
			2 => 16,
		],
		'win inter' => '4, 5',
		'win inter 2' => '4',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'win(union)' => '4, 5, 8, 10',
			'1 won(win bet)' => 1540,
			'7 won(place bet 4)' => 415,
		],
		'total bets' => 800,
		'wp' => '8, 10',//count wp: 2
		'total won in race 2' => 1155,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '8, 2, 9, 1',
		'suggestions' => [
			'win' => '2, 4, 5, 7, 8, 9',
			'qin' => '2, 3, 4, 5, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10',//count trio: 9
			'inter' => '2, 4, 7',
			'diff' => '6',//count diff: 1
		],
		'win amount' => 28,
		'qin amount' => 77.5,
		'trio amount' => 176,
		'place amount' => [
			8 => 13.5,
			2 => 15,
			9 => 24.5,
		],
		'win inter' => '5, 7, 9',
		'win inter 2' => '5, 8',//count win inter 2: 2
		'allValues' => '1, 2, 3, 5, 6, 7',
		'bets' => [
			'place(end-favorites )' => '7',
		],
		'total bets' => 100,
		'wp' => '2, 7',//count wp: 2
		'total won in race 3' => -100,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '2, 11, 9, 4',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count diff: 11
		],
		'win amount' => 16,
		'qin amount' => 67,
		'trio amount' => 578,
		'place amount' => [
			2 => 10.1,
			11 => 27,
			9 => 58,
		],
		'win inter' => '1, 3, 4, 5, 8, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '13, 11, 5, 4',
		'suggestions' => [
			'win' => '1, 13',
			'qin' => '1, 7, 11, 13',
			'trio' => '1, 2, 3, 5, 7, 11, 13',//count trio: 7
			'inter' => '1',
			'diff' => '4, 6, 8, 9, 10, 12',//count diff: 6
		],
		'win amount' => 91,
		'qin amount' => 284.5,
		'trio amount' => 660,
		'place amount' => [
			13 => 32,
			11 => 21,
			5 => 26,
		],
		'win inter' => '1, 3',
		'win inter 2' => '1, 13',//count win inter 2: 2
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 11',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7, 8, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '14, 1, 8, 10',
		'suggestions' => [
			'win' => '1, 3, 5, 7, 8, 11, 12, 14',
			'qin' => '1, 2, 3, 5, 7, 8, 9, 10, 11, 12, 14',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 13
			'inter' => '7, 8, 11',
			'diff' => '6',//count diff: 1
		],
		'win amount' => 124,
		'qin amount' => 1295.5,
		'trio amount' => 3348,
		'place amount' => [
			14 => 34,
			1 => 51.5,
			8 => 35.5,
		],
		'win inter' => '',
		'win inter 2' => '14',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '7, 8, 9',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '6, 8, 4, 7',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 7',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9',//count trio: 9
			'inter' => '1, 6',
			'diff' => '',//count diff: 0
		],
		'win amount' => 22,
		'qin amount' => 43,
		'trio amount' => 212,
		'place amount' => [
			6 => 11.5,
			8 => 13,
			4 => 42,
		],
		'win inter' => '2, 3',
		'win inter 2' => '2, 3, 6',//count win inter 2: 3
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 130,
			'place(end-wp )' => '8',
			'2 won(place bet)' => 130,
		],
		'total bets' => 200,
		'wp' => '1, 6, 8',//count wp: 3
		'total won in race 7' => 60,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 7, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '4, 5, 8, 7',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 6, 8, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9',//count trio: 9
			'inter' => '2, 8, 9',
			'diff' => '',//count diff: 0
		],
		'win amount' => 215.5,
		'qin amount' => 271,
		'trio amount' => 106,
		'place amount' => [
			4 => 39.5,
			5 => 12,
			8 => 10.1,
		],
		'win inter' => '2, 3',
		'win inter 2' => '4',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
			'place(end-favorites )' => '9',
			'place(end-wp )' => '8',
			'2 won(place bet)' => 101,
		],
		'total bets' => 200,
		'wp' => '2, 7, 8',//count wp: 3
		'total won in race 8' => -99,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 5, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '7, 6, 9, 4',
		'suggestions' => [
			'win' => '1, 4, 5, 6, 7, 8, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 10
			'inter' => '4, 5, 6, 7',
			'diff' => '',//count diff: 0
		],
		'win amount' => 25.5,
		'qin amount' => 105,
		'trio amount' => 147,
		'place amount' => [
			7 => 13.5,
			6 => 20,
			9 => 15.5,
		],
		'win inter' => '1, 5, 8, 9',
		'win inter 2' => '7',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'place(end-favorites )' => '7',
			'1 won(place bet)' => 135,
		],
		'total bets' => 100,
		'wp' => '4, 5, 6, 7',//count wp: 4
		'total won in race 9' => 35,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 6, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '9, 1, 5, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 7, 9, 10',
			'qin' => '1, 2, 3, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 7, 8, 9, 10, 11, 12, 13',//count trio: 11
			'inter' => '2, 9',
			'diff' => '4, 6, 14',//count diff: 3
		],
		'win amount' => 49.5,
		'qin amount' => 225,
		'trio amount' => 343,
		'place amount' => [
			9 => 17.5,
			1 => 28,
			5 => 22.5,
		],
		'win inter' => '',
		'win inter 2' => '9',//count win inter 2: 1
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -235
//total place end wp: 31
//total place wp: 0
//total sure place: 0
//total win: 1140
//total place union: 15
//total: 951
