<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '1, 8, 5, 9',
		'suggestions' => [
			'win' => '3, 8',
			'qin' => '3, 4, 8, 9',
			'trio' => '3, 4, 7, 8, 9',//count trio: 5
			'inter' => '',
			'diff' => '1, 2, 5, 6',//count diff: 4
		],
		'win amount' => 50.5,
		'qin amount' => 264.5,
		'trio amount' => 1421,
		'place amount' => [
			1 => 19,
			8 => 30.5,
			5 => 41,
		],
		'win inter' => '1, 6, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 6, 7, 8, 9',
		'official win' => '8, 6, 7, 3',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 6, 7, 8, 9',//count diff: 8
		],
		'win amount' => 58.5,
		'qin amount' => 49.5,
		'trio amount' => 102,
		'place amount' => [
			8 => 15,
			6 => 13,
			7 => 22,
		],
		'win inter' => '1, 2, 3, 4, 6, 7, 8',
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '5, 7, 8, 10',
		'suggestions' => [
			'win' => '2, 8',
			'qin' => '2, 8',
			'trio' => '1, 2, 8, 9',//count trio: 4
			'inter' => '2',
			'diff' => '3, 4, 5, 6, 7, 10',//count diff: 6
		],
		'win amount' => 21,
		'qin amount' => 62,
		'trio amount' => 1105,
		'place amount' => [
			5 => 12,
			7 => 17,
			8 => 135.5,
		],
		'win inter' => '3, 9',
		'allValues' => '1, 2, 3, 5, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 5, 7',//count wp: 4
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 3, 6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 1, 10, 3',
		'suggestions' => [
			'win' => '1, 2, 3',
			'qin' => '1, 2, 3, 4, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10',//count trio: 8
			'inter' => '2, 3',
			'diff' => '8, 9, 11, 12',//count diff: 4
		],
		'win amount' => 110.5,
		'qin amount' => 705.5,
		'trio amount' => 2250,
		'place amount' => [
			11 => 36,
			1 => 36,
			10 => 32,
		],
		'win inter' => '',
		'win inter 2' => '2',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 6, 11',//count wp: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '2, 12, 7, 10',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 26,
		'qin amount' => 63,
		'trio amount' => 137,
		'place amount' => [
			2 => 13,
			12 => 18,
			7 => 20.5,
		],
		'win inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'win(union)' => '2, 4, 7, 12',
			'1 won(win bet)' => 260,
			'7 won(place bet 2)' => 130,
			'7 won(place bet 7)' => 205,
			'7 won(place bet 12)' => 180,
		],
		'total bets' => 800,
		'wp' => '2, 7',//count wp: 2
		'total won in race 5' => -25,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 6, 8, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 8, 1, 10',
		'suggestions' => [
			'win' => '2, 8, 12',
			'qin' => '2, 3, 4, 5, 8, 12',
			'trio' => '1, 2, 3, 4, 5, 8, 12',//count trio: 7
			'inter' => '8, 12',
			'diff' => '6, 7, 9, 10, 11',//count diff: 5
		],
		'win amount' => 364.5,
		'qin amount' => 1798,
		'trio amount' => 6059,
		'place amount' => [
			9 => 96,
			8 => 23.5,
			1 => 63.5,
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 6, 8, 10',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '2, 1, 4, 9',
		'suggestions' => [
			'win' => '2, 5, 6',
			'qin' => '1, 2, 4, 5, 6, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 8',//count trio: 7
			'inter' => '2, 6',
			'diff' => '7, 9',//count diff: 2
		],
		'win amount' => 58,
		'qin amount' => 33,
		'trio amount' => 260,
		'place amount' => [
			2 => 14.5,
			1 => 11.5,
			4 => 69.5,
		],
		'win inter' => '1, 2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 6',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '2, 5, 1, 10',
		'suggestions' => [
			'win' => '4, 5, 9',
			'qin' => '4, 5, 6, 9',
			'trio' => '2, 4, 5, 6, 8, 9',//count trio: 6
			'inter' => '',
			'diff' => '1, 3, 7, 10',//count diff: 4
		],
		'win amount' => 24,
		'qin amount' => 203,
		'trio amount' => 808,
		'place amount' => [
			2 => 12,
			5 => 40,
			1 => 49,
		],
		'win inter' => '4, 6, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6, 8',//count wp: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '11, 6, 7, 12',
		'suggestions' => [
			'win' => '2, 4',
			'qin' => '2, 4, 5, 6',
			'trio' => '2, 4, 5, 6, 8',//count trio: 5
			'inter' => '2',
			'diff' => '1, 3, 7, 9, 10, 11, 12, 13',//count diff: 8
		],
		'win amount' => 145.5,
		'qin amount' => 268,
		'trio amount' => 359,
		'place amount' => [
			11 => 42.5,
			6 => 16.5,
			7 => 16.5,
		],
		'win inter' => '5, 8, 12',
		'win inter 2' => '2',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites )' => '8',
		],
		'total bets' => 100,
		'wp' => '1, 2, 6, 8',//count wp: 4
		'total won in race 9' => -100,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 3',
		'runners' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '3, 5, 8, 4',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count diff: 12
		],
		'win amount' => 37.5,
		'qin amount' => 485.5,
		'trio amount' => 2152,
		'place amount' => [
			3 => 17,
			5 => 44.5,
			8 => 41.5,
		],
		'win inter' => '10',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -100
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: -140
//total place union: 115
//total: -125
