<?php
   $data = [

    // Basic Info
    'name' => 'Kamlesh Nagar',
    'designation' => 'Video Editor & Beat Producer',
    'age' => 29,
    'pin' => 382418,
    'address' => 'Vastral, Ahmedabad - 382418',
    'email' => 'kamleshnagar0095@gmail.com',
    'phone' => '+917990929061',

    // Experience & Tools
    'experience_years' => 1,
    'tools' => 'Premiere Pro, Filmora, Illustrator, Photoshop, FL Studio',

    // Typed.js items
    'typed_items' => [
        'Video Editor',
        'Beat Producer',
        'Sound Designer',
        'Mixing Engineer',
        'Mastering Engineer',
    ],

    // Hero section text
    'hero_paragraph' => 'I create fast-paced edits, cinematic sequences, motion graphics, and high-quality beats—delivering polished visuals and professional sound for every project.',

    // About paragraph
    'about_paragraph' => 'I work across narrative and commercial projects — editing interviews, music videos, social ad clips and short documentaries. On the music side I produce original beats, provide stems, mix and master final tracks. I focus on clear storytelling, tight pacing and a punchy, balanced low end.',

    // Stats
    'stats' => [
        ['icon' => 'bi-emoji-smile',    'end' => 120,  'label' => 'Happy Clients',  'sub' => 'Brands & artists'],
        ['icon' => 'bi-journal-richtext','end' => 340,  'label' => 'Projects',      'sub' => 'Videos & beats'],
        ['icon' => 'bi-headset',        'end' => 7800, 'label' => 'Hours Edited',  'sub' => 'Footage & sessions'],
        ['icon' => 'bi-people',         'end' => 45,   'label' => 'Collaborators', 'sub' => 'Photogs & vocalists'],
    ],

    // Skills
    'skills' => [
        ['name' => 'Video Editing (Premiere)', 'percent' => 80],
        ['name' => 'Audio Production',         'percent' => 90],
        ['name' => 'Mixing & Mastering',       'percent' => 90],
        ['name' => 'Sound Design',             'percent' => 80],
        ['name' => 'Color Grading',            'percent' => 60],
    ],

    // Resume Section
    'resume' => [
        'summary_name' => 'Kamlesh Nagar',
        'summary_text' => 'Creative video editor and beat producer delivering music videos, promo content and original instrumentals. Comfortable collaborating with directors, artists and brands from concept through delivery.',
        'location' => 'Ahmedabad, India',
        'phone' => '+917990929061',
        'email' => 'kaalmusicproduction@gmail.com',

        'education' => [
            'degree' => 'B.Com',
            'years' => '2017 - 2018',
            'college' => 'University of Mumbai - Ghanshyamdas Saraf College, Malad, Mumbai (Maharashtra)',
            'video_editing_course' => 'Mac Films, Surat (Gujarat)',
            'description' => 'Studied editing, cinematography and audio post-production with hands-on projects and internships.',
        ],

        'experience' => [
            [
                'title' => 'Video Editor & Producer',
                'years' => '2025 - Present',
                'company' => 'Self-employed',
                'location' => 'Ahmedabad',
                'bullets' => [
                    'Edited 50+ videos including music videos, promo spots and social campaigns.',
                    'Produced and delivered original beats and instrumental tracks.',
                    'Handled color grading, motion graphics and audio mix for final delivery.',
                ],
            ],
            [
                'title' => 'Assistant Editor — Creative Studio',
                'years' => '2024 - 2025',
                'company' => 'Mac Films',
                'location' => 'Surat',
                'bullets' => [
                    'Supported senior editors on commercial and short-form projects: logging, rough cuts and media management.',
                    'Prepared deliverables and QC for client review.',
                    'Built templates and presets to speed up team workflows.',
                ],
            ],
        ],
    ],

    // Portfolio
    'portfolio' => [
        [
            'type' => 'video',
            'video' => 'https://www.youtube.com/watch?v=3yHP72K3rdk',
            'image' => 'https://img.youtube.com/vi/3yHP72K3rdk/hqdefault.jpg',
            'title' => '"Ya Ali" - Drill Type Beat',
            'desc' => 'Full edit & full sound production',
            'gallery' => 'portfolio-gallery-video',
        ],
        [
            'type' => 'video',
            'video' => 'https://www.youtube.com/watch?v=0ygUTO5bf7s',
            'image' => 'https://img.youtube.com/vi/0ygUTO5bf7s/hqdefault.jpg',
            'title' => '"Loyalty is Rare" - Shatir',
            'desc' => 'Instrumental production & stems',
            'gallery' => 'portfolio-gallery-beat',
        ],
        [
            'type' => 'mix-mastering',
            'video' => 'https://www.youtube.com/watch?v=gaMPPik6-Hk',
            'image' => 'https://img.youtube.com/vi/gaMPPik6-Hk/hqdefault.jpg',
            'title' => '"Still King" — KingD',
            'desc' => 'Mixing-Mastering',
            'gallery' => 'portfolio-gallery-video',
        ],
        [
            'type' => 'video',
            'video' => 'https://www.youtube.com/watch?v=g3sYDuQO_UU',
            'image' => 'https://img.youtube.com/vi/g3sYDuQO_UU/hqdefault.jpg',
            'title' => '"Mauj Maa" — Mc Truth',
            'desc' => 'Assistant Video Editor',
            'gallery' => 'portfolio-gallery-beat',
        ],
        [
            'type' => 'video',
            'video' => 'https://www.youtube.com/watch?v=I3xAEod2ZU8',
            'image' => 'https://img.youtube.com/vi/I3xAEod2ZU8/hqdefault.jpg',
            'title' => '"Bar Fest" — Mc Truth',
            'desc' => 'Beat production, arrangement, mix-master & assistant video editor',
            'gallery' => 'portfolio-gallery-beat',
        ],
        [
            'type' => 'video',
            'video' => 'https://www.youtube.com/watch?v=qzRsLkpYcEI',
            'image' => 'https://img.youtube.com/vi/qzRsLkpYcEI/hqdefault.jpg',
            'title' => '"LOWRIDER" - Boom Bap Beat',
            'desc' => 'Beat production, arrangement, mix-master & assistant director',
            'gallery' => 'portfolio-gallery-beat',
        ],
    ],

    // Services
    'services' => [
        ['icon' => 'bi-film',              'title' => 'Video Editing',       'desc' => 'Narrative & commercial editing, pacing, assembly cuts, final delivery.'],
        ['icon' => 'bi-music-note-beamed', 'title' => 'Beat Production',     'desc' => 'Original beats, loops, and full instrumental tracks.'],
        ['icon' => 'bi-earbuds',           'title' => 'Mixing & Mastering', 'desc' => 'Final mixing, loudness optimisation and mastering.'],
        ['icon' => 'bi-share',             'title' => 'Social Clips',       'desc' => 'Short-form edits optimised for Instagram, TikTok and YouTube shorts.'],
    ],

    // Testimonials
    'testimonials' => [
        ['img' => 'assets/img/testimonials/testimonials-1.jpg', 'text' => '“Turned raw footage into a tight, emotional music video — delivered on time.”', 'name' => 'Maria Lopez', 'role' => 'Artist'],
        ['img' => 'assets/img/testimonials/testimonials-2.jpg', 'text' => '“Great beats and fast revisions — the stems made the session a breeze.”',       'name' => 'Jason Reed', 'role' => 'Producer'],
        ['img' => 'assets/img/testimonials/testimonials-3.jpg', 'text' => '“Professional, responsive and detail-oriented. Color grading and sound mix lifted the final piece.”', 'name' => 'Hannah Kim', 'role' => 'Creative Director'],
    ],

    // Contact
    'contact' => [
        'address' => 'Vastral, Ahmedabad',
        'phone' => '+917990929061',
        'email' => 'kamleshnagar0095@gmail.com',
        'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.2948429473273!2d72.67404797446892!3d23.039578515917418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e874db50ffb85%3A0x8f23eac2e1d44c7e!2sVastral%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1706683100000',
    ],
];


        // return view with compacted data
