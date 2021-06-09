<?php

use Pessek\PessekJitsi\Bootstrap;

return [
	'bootstrap' => \Pessek\PessekJitsi\Bootstrap::class,
	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'pessekjitsi',
			'class' => PessekJitsi::class,
			'searchable' => true,
		],
	],
	'settings' => [
		'jitsi_service' => 'https://meet.jit.si/',
		'enable_groups' => 'yes',
		'enable_attachment' => 'yes',
		'add_event_to_calendar' => 'yes',
		'who_can_create' => 'allmembers',
	],
	'actions' => [
		'pessek_jitsi/addjitsi' => [],
		'pessek_jitsi/deleteattachment' => [],
		'pessek_jitsi/deletepessekjitsi' => [],
		'pessek_jitsi/addjitsigroup' => [],
	],

	'routes' => [
		'collection:object:jitsimeet:all' => [
			'path' => '/jitsimeet/pessek',
			'resource' => 'pessek_jitsi/meeting',
		],
		'default:object:pessekjitsi' => [
			'path' => '/pessekjitsi',
			'resource' => 'pessek_jitsi/all',
		],
		'collection:object:pessekjitsi:all' => [
			'path' => '/pessekjitsi/all',
			'resource' => 'pessek_jitsi/all',
		],
		'collection:object:pessekjitsi:live' => [
			'path' => '/pessekjitsi/live',
			'resource' => 'pessek_jitsi/live',
		],
		'collection:object:pessekjitsi:upcoming' => [
			'path' => '/pessekjitsi/upcoming',
			'resource' => 'pessek_jitsi/upcoming',
		],
		'collection:object:pessekjitsi:attending' => [
			'path' => '/pessekjitsi/attending/{username}',
			'resource' => 'pessek_jitsi/attending',
		],
		'collection:object:pessekjitsi:owner' => [
			'path' => '/pessekjitsi/owner/{username}',
			'resource' => 'pessek_jitsi/owner',
		],
		'collection:object:pessekjitsi:friends' => [
			'path' => '/pessekjitsi/friends/{username}',
			'resource' => 'pessek_jitsi/friends',
			'required_plugins' => [
				'friends',
			],
		],
		'collection:object:pessekjitsi:group' => [
			'path' => '/pessekjitsi/group/{guid}',
			'resource' => 'pessek_jitsi/owner',
			'required_plugins' => [
				'groups',
			],
		],
		'collection:object:pessekjitsi:group:live' => [
			'path' => '/pessekjitsi/group/{guid}/live',
			'resource' => 'pessek_jitsi/live',
			'required_plugins' => [
				'groups',
			],
		],
		'collection:object:pessekjitsi:group:upcoming' => [
			'path' => '/pessekjitsi/group/{guid}/upcoming',
			'resource' => 'pessek_jitsi/upcoming',
			'required_plugins' => [
				'groups',
			],
		],
		'collection:object:pessekjitsi:group:attending' => [
			'path' => '/pessekjitsi/group/{guid}/attending',
			'resource' => 'pessek_jitsi/attending',
			'required_plugins' => [
				'groups',
			],
		],
		'view:object:pessekjitsi' => [
			'path' => '/pessekjitsi/view/{guid}/{title?}',
			'resource' => 'pessek_jitsi/view',
		],
		'view:object:pessekjitsi:processing' => [
			'path' => '/pessekjitsi/processing',
			'resource' => 'pessek_jitsi/filterprocessing',
		],
                'view:object:pessekjitsi:sidebar' => [
                        'path' => '/pessekjitsi/sidebar',
                        'resource' => 'pessek_jitsi/sidebar',
                ],

	],

];
