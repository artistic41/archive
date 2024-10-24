<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 4, 5, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '1, 3, 5',
			'qin' => '1, 2, 3, 4, 5, 8',
			'trio' => '1, 2, 3, 4, 5, 8, 9, 10',//count trio: 8
			'inter' => '1, 5',
			'diff' => '6, 7, 11',//count diff: 3
		],
		'win inter' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4, 5, 9',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4, 5, 8, 11, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 4, 5, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12',//count trio: 10
			'inter' => '3, 4, 5',
			'diff' => '10, 11',//count diff: 2
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 4, 5, 8, 11',//count wp: 5
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '8',
			'qin' => '7, 8',
			'trio' => '7, 8, 9',//count trio: 3
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 10, 11',//count diff: 8
		],
		'win inter' => '1, 3, 5, 7, 11',
		'win inter 2' => '8',//count win inter 2: 1
		'allValues' => '1, 2, 3, 5, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6, 7',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 11',
			'qin' => '1, 2, 3, 4, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10, 11',//count trio: 9
			'inter' => '1, 2, 11',
			'diff' => '8, 9',//count diff: 2
		],
		'win inter' => '1, 5, 10, 11',
		'win inter 2' => '2',//count win inter 2: 1
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'place(end-favorites )' => '11',
			'place(end-wp )' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 300,
		'wp' => '1, 2, 11',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 3, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',//count trio: 10
			'inter' => '1, 2, 3',
			'diff' => '9, 10',//count diff: 2
		],
		'win inter' => '1, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 4, 7',//count wp: 5
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '4, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '5',
			'trio' => '1, 5',//count trio: 2
			'inter' => '',
			'diff' => '2, 3, 4, 6, 7, 8, 9, 10, 11, 12',//count diff: 10
		],
		'win inter' => '1, 2, 6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5, 6',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win inter' => '1, 2, 3, 6, 8, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '5, 8, 11',
			'qin' => '1, 5, 6, 8, 10, 11',
			'trio' => '1, 2, 4, 5, 6, 8, 10, 11',//count trio: 8
			'inter' => '',
			'diff' => '3, 7, 9, 12',//count diff: 4
		],
		'win inter' => '3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
];
//total place end favorites: -100
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: 0
//total place union: 0
//total: 0
