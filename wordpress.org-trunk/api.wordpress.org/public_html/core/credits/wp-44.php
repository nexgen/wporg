<?php

class WP_44_Credits extends WP_Credits {

	function groups() {
		$groups = array(
			'project-leaders' => array(
				'name'    => 'Project Leaders',
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'matt'        => array( 'Matt Mullenweg',  'Cofounder, Project Lead' ),
					'nacin'       => array( 'Andrew Nacin',    'Lead Developer'          ),
					'markjaquith' => array( 'Mark Jaquith',    'Lead Developer', '097a87a525e317519b5ee124820012fb' ),
					'azaozz'      => array( 'Andrew Ozz',      'Lead Developer'          ),
					'helen'       => array( 'Helen Hou-Sandí', 'Lead Developer'          ),
					'dd32'        => array( 'Dion Hulse',      'Lead Developer'          ),
				),
			),
			'core-developers' => array(
				'name'    => 'Contributing Developers',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => array(
					'wonderboymusic' => array( 'Scott Taylor',        'Release Lead' ),
					'ocean90'        => array( 'Dominik Schilling',   'Core Developer' ),
					'SergeyBiryukov' => array( 'Sergey Biryukov',     'Core Developer' ),
					'boonebgorges'   => array( 'Boone B. Gorges',     'Core Developer' ),
					'pento'          => array( 'Gary Pendergast',     'Core Developer' ),
					'johnbillion'    => array( 'John Blackbourn',     'Core Developer', '0000ba6dd1b089e1746abbfe6281ee3b' ),
					'DrewAPicture'   => array( 'Drew Jaynes',         'Core Developer' ),
					'jeremyfelt'     => array( 'Jeremy Felt',         'Core Developer' ),
					'jorbin'         => array( 'Aaron Jorbin',        'Core Developer' ),
				),
			),
			'contributing-developers' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'obenland'       => 'Konstantin Obenland',
					'iseulde'        => 'Ella Iseulde Van Dorpe',
					'westonruter'    => array( 'Weston Ruter', '22ed378fbf1d918ef43a45b2a1f34634' ),
					'afercia'        => 'Andrea Fercia',
					'rmccue'         => array( 'Ryan McCue', '08818120f223035a0857c2a0ec417f93' ),
					'karmatosed'     => 'Tammie Lister',
				),
			),
			'recent-rockstars' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'chriscct7'       => array( 'Chris Christoff', 'd0931e57862048dabb0bea3a71ce6229' ),
					'swissspidy'      => 'Pascal Birchler',
					'danielbachhuber' => 'Daniel Bachhuber',
					'rachelbaker'     => 'Rachel Baker',
					'joehoyle'        => 'Joe Hoyle',
					'ramiy'           => 'Rami Yushuvaev',
					'kirasong'        => 'Kira Song',
					'tevko'           => 'Tim Evko',
					'jaspermdegroot'  => 'Jasper de Groot',
					'joemcgill'       => 'Joe McGill',
					'wilto'           => array( 'Mat Marquis', '2d087e6ab3f067d53c6cbc2e9b722a62' ),
					'iamtakashi'      => 'Takashi Irie',
					'peterwilsoncc'   => 'Peter Wilson',
				),
			),
		);

		return $groups;
	}

	function props() {
		return array(
			'5um17',
			'_smartik_',
			'a5hleyrich',
			'aaroncampbell',
			'aaronrutley',
			'adamholisky',
			'adamsilverstein',
			'aduth',
			'afercia',
			'afragen',
			'akibjorklund',
			'akirk',
			'albertoct',
			'alireza1375',
			'alphawolf',
			'amandato',
			'amereservant',
			'ankit-k-gupta',
			'ankitgadertcampcom',
			'antpb',
			'apkoponen',
			'apokalyptik',
			'athsear',
			'atomicjack',
			'austinginder',
			'azaozz',
			'barryceelen',
			'barrykooij',
			'bcworkz',
			'bdn3504',
			'benjaminpick',
			'benjmay',
			'berengerzyla',
			'betzster',
			'bigdawggi',
			'bilalcoder',
			'binarykitten',
			'birgire',
			'bjornjohansen',
			'bobbingwide',
			'boonebgorges',
			'bordoni',
			'bradparbs',
			'bradt',
			'bradyvercher',
			'brainstormforce',
			'bravokeyl',
			'brentvr',
			'brettz95',
			'cainm',
			'cais',
			'camikaos',
			'carolinegeven',
			'cdog',
			'celloexpressions',
			'cfinke',
			'cgrymala',
			'ch1902',
			'chacha102',
			'chandrapatel',
			'charlestonsw',
			'chasewiseman',
			'cheffheid',
			'chiara_09',
			'chipbennett',
			'chiragswadia',
			'chriscct7',
			'chriscoyier',
			'chrisdc1',
			'chrismkindred',
			'christophherr',
			'chrisvendiadvertisingcom',
			'cklosows',
			'clorith',
			'codeelite',
			'coenjacobs',
			'coffee2code',
			'compute',
			'corphi',
			'couturefreak',
			'craig-ralston',
			'crazycoolcam',
			'daniel-koskinen',
			'danielbachhuber',
			'daniellandau',
			'daniloercoli',
			'dannydehaan',
			'dattaparad',
			'davidakennedy',
			'davidanderson',
			'davidbinda',
			'dboulet',
			'dbru',
			'dd32',
			'debaat',
			'delawski',
			'denis-de-bernardy',
			'desrosj',
			'dezzy',
			'dimadin',
			'dipalidhole27gmailcom',
			'dipeshkakadiya',
			'dlh',
			'dllh',
			'dmchale',
			'dmenard',
			'dossy',
			'downstairsdev',
			'drebbitsweb',
			'drewapicture',
			'drozdz',
			'dshanske',
			'duck_',
			'dustinbolton',
			'dvankooten',
			'ebinnion',
			'edirect24',
			'eduardozulian',
			'egill',
			'egower',
			'eherman24',
			'ehtis',
			'ellieroepken',
			'elliott-stocks',
			'elusiveunit',
			'engelen',
			'enshrined',
			'ericdaams',
			'ericjuden',
			'ericlewis',
			'ericmann',
			'extendwings',
			'f4rkie',
			'figureone',
			'filosofo',
			'firebird75',
			'fjarrett',
			'flixos90',
			'fonglh',
			'francoisb',
			'frank-klein',
			'frozzare',
			'fsylum',
			'gaelan',
			'gagan0123',
			'garusky',
			'garyc40',
			'garyj',
			'garza',
			'gautamgupta',
			'gblsm',
			'geminorum',
			'gezamiklo',
			'gitlost',
			'gizburdt',
			'gnaka08',
			'gounder',
			'gradyetc',
			'grapplerulrich',
			'greenshady',
			'greglone',
			'gregrickaby',
			'grvrulz',
			'gwinhlopez',
			'hakre',
			'hauvong',
			'headonfire',
			'helen',
			'hlashbrooke',
			'hnle',
			'hrishiv90',
			'hugobaeta',
			'iamfriendly',
			'iamtakashi',
			'iandstewart',
			'iandunn',
			'icetee',
			'iehsanir',
			'igmoweb',
			'imath',
			'ippetkov',
			'iseulde',
			'ivankristianto',
			'iworks',
			'ixkaito',
			'jadpm',
			'jakubtyrcha',
			'janhenckens',
			'japh',
			'jaspermdegroot',
			'jazbek',
			'jcroucher',
			'jdgrimes',
			'jeffpyebrookcom',
			'jeffmatson',
			'jeffstieler',
			'jeichorn',
			'jeremyfelt',
			'jesin',
			'jfarthing84',
			'jim912',
			'jjeaton',
			'jliman',
			'jmayhak',
			'jmdodd',
			'jnylen0',
			'jobst',
			'joedolson',
			'joehills',
			'joehoyle',
			'joemcgill',
			'johnbillion',
			'johnjamesjacoby',
			'johnpbloch',
			'jonathanbardo',
			'joostdevalk',
			'jorbin',
			'jpr',
			'jpry',
			'jrf',
			'jshreve',
			'jtsternberg',
			'jubstuff',
			'juhise',
			'juliobox',
			'junsuijin',
			'justdaiv',
			'justinsainton',
			'kadamwhite',
			'kalenjohnson',
			'karinedo',
			'karmatosed',
			'karpstrucking',
			'kawauso',
			'kevinatelement',
			'kevinb',
			'kevinlangleyjr',
			'khromov',
			'kingkool68',
			'kirasong',
			'kitchin',
			'kloon',
			'koke',
			'kovshenin',
			'kraftbj',
			'kraftner',
			'krissiev',
			'kucrut',
			'kurtpayne',
			'laceous',
			'lancewillett',
			'lcherpit',
			'ldinclaux',
			'leemon',
			'leewillis77',
			'lessbloat',
			'liljimmi',
			'linuxologos',
			'lovememore',
			'lucatume',
			'luciole135',
			'lucymtc',
			'lukecarbis',
			'macmanx',
			'madalinungureanu',
			'mako09',
			'manolis09',
			'markel',
			'markjaquith',
			'markoheijnen',
			'matheusfd',
			'mattbagwell',
			'mattheu',
			'maweder',
			'mazurstas',
			'mboynes',
			'mbrandys',
			'mcguive7',
			'mckilem',
			'mdawaffe',
			'mdgl',
			'mdmcginn',
			'mechter',
			'mehulkaklotar',
			'meitar',
			'melchoyce',
			'meloniq',
			'mercime',
			'metodiew',
			'mgibbs189',
			'micahmills',
			'micahwave',
			'michael-arestad',
			'michielhab',
			'miglosh',
			'mikehansenme',
			'mikejolley',
			'mikeschinkel',
			'mindctrl',
			'miqrogroove',
			'mismith227',
			'misterbisson',
			'misterunknown',
			'mitchoyoshitaka',
			'miyauchi',
			'monika',
			'mor10',
			'mordauk',
			'morganestes',
			'mrahmadawais',
			'mrmist',
			'mt8biz',
			'mte90',
			'mulvane',
			'nacin',
			'nbachiyski',
			'neoscrib',
			'neoxx',
			'nerrad',
			'netweb',
			'next-season',
			'nhuja',
			'niallkennedy',
			'nicholas_io',
			'nickciske',
			'nickduncan',
			'nikeo',
			'niklasbr',
			'nikolovtmw',
			'nikschavan',
			'nofearinc',
			'norcross',
			'nprasath002',
			'obenland',
			'obrienlabs',
			'ocean90',
			'offereins',
			'originalexe',
			'oso96_2000',
			'otto42',
			'oxymoron',
			'pareshradadiya-1',
			'pauldewouters',
			'paulwilde',
			'pavelevap',
			'pbearne',
			'pento',
			'peterwilsoncc',
			'petya',
			'pfefferle',
			'philiparthurmoore',
			'philiplakin',
			'pixolin',
			'polevaultweb',
			'prasad-nevase',
			'pratikchaskar',
			'pross',
			'psoluch',
			'rabmalin',
			'racase',
			'rachelbaker',
			'rahe',
			'rajnikmit',
			'ramay',
			'ramiy',
			'raulillana',
			'realloc',
			'redsweater',
			'renoirb',
			'rhubbardreverb',
			'rhyswynne',
			'rianrietveld',
			'rilwis',
			'rmccue',
			'rodrigosprimo',
			'rogerhub',
			'rommelxcastro',
			'romsocial',
			'ronalfy',
			'rosso99',
			'ruudjoyo',
			'ryankienstra',
			'ryelle',
			'sabreuse',
			'salcode',
			'salvoaranzulla',
			'sam2kb',
			'sammybeats',
			'samuelsidler',
			'sanketparmar',
			'sarciszewski',
			'sboisvert',
			'sc0ttkclark',
			'scottbrownconsulting',
			'scribu',
			'sdavis2702',
			'seanchayes',
			'sebastianpisula',
			'sergeybiryukov',
			'serpent7776',
			'several27',
			'sgrant',
			'shedonist',
			'shelob9',
			'shimakyohsuke',
			'shinichin',
			'side777',
			'sillybean',
			'simonwheatley',
			'siobhan',
			'sirbrillig',
			'sirzooro',
			'sivel',
			'sjmur',
			'skithund',
			'slimndap',
			'smerriman',
			'solarissmoke',
			'sorich87',
			'spacedmonkey',
			'spmlucas',
			'stebbiv',
			'stephenharris',
			'stevegrunwell',
			'stevehenty',
			'stevehoneynz',
			'stevenkword',
			'sudar',
			'summerblue',
			'sunnyratilal',
			'swissspidy',
			'tanner-m',
			'tbcorr',
			'tellyworth',
			'tevko',
			'tfrommen',
			'thaicloud',
			'tharsheblows',
			'themiked',
			'theode',
			'thomaswm',
			'tigertech',
			'tillkruess',
			'tivnet',
			'tmatsuur',
			'tmeister',
			'tobiasbg',
			'tollmanz',
			'tomharrigan',
			'tommarshall',
			'tomsommer',
			'toro_unit',
			'tott',
			'trenzterra',
			'trepmal',
			'tryon',
			'tszming',
			'tychay',
			'tywayne',
			'tyxla',
			'umeshnevase',
			'umeshsingla',
			'usermrpapa',
			'utkarshpatel',
			'valendesigns',
			'veraxus',
			'vilkatis',
			'viper007bond',
			'voldemortensen',
			'walbo',
			'walterbarcelos',
			'walterebert',
			'webaware',
			'webdevmattcrom',
			'webord',
			'welcher',
			'wen-solutions',
			'wenthemes',
			'westonruter',
			'willmot',
			'wilto',
			'wmertens',
			'wojtekszkutnik',
			'wonderboymusic',
			'wp-architect',
			'wpdev101',
			'wpmuguru',
			'wpsmith',
			'wturrell',
			'yamchhetri',
			'yoavf',
			'zeo',
			'zrothauser',
		);
	}

	function external_libraries() {
		return array(
			array( 'Backbone.js', 'http://backbonejs.org/' ),
			array( 'Class POP3', 'http://squirrelmail.org/' ),
			array( 'Color Animations', 'http://plugins.jquery.com/color/' ),
			array( 'Horde Text Diff', 'http://pear.horde.org/' ),
			array( 'hoverIntent', 'http://plugins.jquery.com/project/hoverIntent' ),
			array( 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ),
			array( 'Iris', 'https://github.com/Automattic/Iris' ),
			array( 'jQuery', 'http://jquery.com/' ),
			array( 'jQuery UI', 'http://jqueryui.com/' ),
			array( 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ),
			array( 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ),
			array( 'jQuery.query', 'http://plugins.jquery.com/query-object/' ),
			array( 'jQuery.suggest', 'http://plugins.jquery.com/project/suggest' ),
			array( 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ),
			array( 'json2', 'https://github.com/douglascrockford/JSON-js' ),
			array( 'Masonry', 'http://masonry.desandro.com/' ),
			array( 'MediaElement.js', 'http://mediaelementjs.com/' ),
			array( 'PclZip', 'http://www.phpconcept.net/pclzip/' ),
			array( 'PemFTP', 'http://www.phpclasses.org/browse/package/1743.html' ),
			array( 'phpass', 'http://www.openwall.com/phpass/' ),
			array( 'PHPMailer', 'http://code.google.com/a/apache-extras.org/p/phpmailer/' ),
			array( 'Plupload', 'http://www.plupload.com/' ),
			array( 'SimplePie', 'http://simplepie.org/' ),
			array( 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ),
			array( 'Thickbox', 'http://codylindley.com/thickbox/' ),
			array( 'TinyMCE', 'http://www.tinymce.com/' ),
			array( 'Twemoji', 'https://github.com/twitter/twemoji' ),
			array( 'Underscore.js', 'http://underscorejs.org/' ),
			array( 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ),
		);
	}
}