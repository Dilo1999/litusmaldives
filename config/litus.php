<?php

return [
    'media_base' => 'https://www.litusmaldives.com/wp-content/uploads',
    'logo' => 'images/logo/Litus-Maldives-2048x781-1-300x114.png',

    'hero_image' => 'https://images.unsplash.com/photo-1578922746465-3a80a228f223?w=1920&h=1080&fit=crop&auto=format',

    'nav_links' => [
        ['label' => 'HOME', 'route' => 'home'],
        ['label' => 'ABOUT Us', 'route' => 'about'],
        ['label' => 'SERVICES', 'route' => 'services'],
        ['label' => 'OPERATIONS', 'href' => '/#operations'],
        ['label' => 'ARTICLES', 'href' => '/#articles'],
        ['label' => 'CAREERS', 'route' => 'career'],
        ['label' => 'CONTACT Us', 'route' => 'contact'],
    ],

    'intro' => 'LITUS Maldives is a specialist freight management company with offices, warehousing, and an exceptional operations team providing end-to-end logistics services throughout the archipelago.',

    'slides' => [
        [
            'h1' => 'Taking Logistics Beyond',
            'h2' => 'Expectation',
            'sub' => 'Reliable, efficient, and global logistics solutions tailored to move your business forward.',
            'cta' => 'Our Services',
            'cta_route' => 'services',
            'secondary_cta' => 'CONTACT Us',
            'secondary_route' => 'contact',
            'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=1920&h=1080&fit=crop&auto=format',
            'effect' => 'wipe',
        ],
        [
            'h1' => 'Inter Atoll',
            'h2' => 'Transportation',
            'sub' => 'Reliable freight across all 26 atolls with a modern fleet built for the Maldivian archipelago.',
            'cta' => 'Our Services',
            'cta_route' => 'services',
            'secondary_cta' => 'CONTACT Us',
            'secondary_route' => 'contact',
            'image' => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=1920&h=1080&fit=crop&auto=format',
            'effect' => 'mosaic',
        ],
        [
            'h1' => 'Your Trusted',
            'h2' => 'Partner',
            'sub' => 'From customs clearance to last-mile island delivery — Litus handles every step, every time.',
            'cta' => 'Our Services',
            'cta_route' => 'services',
            'secondary_cta' => 'CONTACT Us',
            'secondary_route' => 'contact',
            'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=1920&h=1080&fit=crop&auto=format',
            'effect' => 'blinds',
        ],
    ],

    'hero_features' => [
        [
            'icon' => 'globe',
            'title' => 'Global Network',
            'body' => 'Delivering across oceans and beyond',
        ],
        [
            'icon' => 'clock',
            'title' => '24/7 Support',
            'body' => "We're here anytime you need us",
        ],
        [
            'icon' => 'shield',
            'title' => 'Safe & Secure',
            'body' => 'Your cargo is our responsibility',
        ],
        [
            'icon' => 'timer',
            'title' => 'On-Time Delivery',
            'body' => 'Because time moves business',
        ],
    ],

    'home_services' => [
        [
            'icon' => 'ship',
            'title' => 'Sea Freight',
            'desc' => 'Reliable ocean freight solutions worldwide.',
        ],
        [
            'icon' => 'plane',
            'title' => 'Air Freight',
            'desc' => 'Fast and efficient air cargo services.',
        ],
        [
            'icon' => 'truck',
            'title' => 'Land Transport',
            'desc' => 'Secure and timely road transport across destinations.',
        ],
        [
            'icon' => 'warehouse',
            'title' => 'Warehousing',
            'desc' => 'Modern facilities for safe and flexible storage.',
        ],
        [
            'icon' => 'file-check',
            'title' => 'Customs Clearance',
            'desc' => 'Hassle-free customs clearance and compliance.',
        ],
        [
            'icon' => 'package',
            'title' => 'Project Cargo',
            'desc' => 'Specialized handling for oversized and heavy shipments.',
        ],
        [
            'icon' => 'link',
            'title' => 'Supply Chain',
            'desc' => 'End-to-end supply chain solutions that add value.',
        ],
        [
            'icon' => 'door',
            'title' => 'Door to Door Delivery',
            'desc' => 'Convenient delivery right to your doorstep.',
        ],
    ],

    'services' => [
        [
            'slug' => 'perishables-general-cargo-transport',
            'title' => 'Perishables & General Cargo Transport',
            'category' => 'General',
            'desc' => 'We provide transportation services for perishables and general cargo across the Maldives. Our experienced team ensures that all cargo is handled with care and attention.',
            'icon' => 'ship',
            'image' => 'https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'Temperature-sensitive and general cargo demand careful planning across the Maldivian archipelago. Litus Maldives coordinates packing, cold-chain handling where required, vessel scheduling, and final delivery so your goods arrive in the condition expected.',
                'From resort provisions to everyday merchandise, our team manages documentation, port handling, and island last-mile delivery with clear communication at every stage.',
            ],
            'highlights' => [
                'Special care for perishable and time-sensitive cargo',
                'Island-wide scheduled and on-demand delivery',
                'Secure packing, documentation, and tracking',
                'Experienced cargo handlers at every transfer point',
            ],
        ],
        [
            'slug' => 'inter-atoll-transport',
            'title' => 'Inter Atoll Transport',
            'category' => 'General',
            'desc' => 'As an island nation, inter-atoll transport is a critical component of the supply chain, enabling distribution of goods and services to remote island communities.',
            'icon' => 'ship',
            'image' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'Connecting Malé with outer atolls requires reliable schedules, weather-aware planning, and vessels suited to each route. We move freight between atolls with dependable turnaround and careful handling for community and commercial cargo alike.',
                'Whether you need a one-off charter or recurring supply runs, our operations team designs routes that keep remote islands stocked without unnecessary delay.',
            ],
            'highlights' => [
                'Scheduled and charter inter-atoll freight',
                'Coverage across inhabited and resort islands',
                'Weather-aware planning and contingency options',
                'End-to-end coordination from origin to destination',
            ],
        ],
        [
            'slug' => 'oog-project-cargo',
            'title' => 'OOG & Project Cargo',
            'category' => 'General',
            'desc' => 'Out of Gauge and Project Cargo requires a specialised team of professionals, since handling strategies and equipment vary in each scenario.',
            'icon' => 'package',
            'image' => 'https://images.unsplash.com/photo-1540946485063-a40da27545f8?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'Oversized, heavy-lift, and project shipments need purpose-built plans — not a one-size-fits-all approach. Our specialists assess dimensions, lift points, route constraints, and site access before recommending the safest method of movement.',
                'From construction equipment to marine project materials, we coordinate surveys, permits, and specialised gear so complex cargo moves with control and clarity.',
            ],
            'highlights' => [
                'Heavy-lift and out-of-gauge expertise',
                'Route surveys and handling method planning',
                'Specialised equipment and certified teams',
                'Project timelines aligned with site requirements',
            ],
        ],
        [
            'slug' => 'transshipment',
            'title' => 'Transshipment',
            'category' => 'Specialization',
            'desc' => 'This process can be necessary to reach the final destination when direct shipping is not possible due to port restrictions, trade routes, or commercial factors.',
            'icon' => 'boxes',
            'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'When cargo cannot sail directly to its final port, efficient transshipment keeps the journey moving. We manage bonded storage, vessel connections, and documentation so transfers between international and domestic legs stay seamless.',
                'Our Malé-based operations team coordinates timing, customs status, and onward dispatch to minimise dwell time and protect cargo integrity.',
            ],
            'highlights' => [
                'Bonded storage and controlled transfers',
                'International-to-domestic vessel connections',
                'Reduced dwell time through proactive planning',
                'Full visibility across each handoff',
            ],
        ],
        [
            'slug' => 'customs-brokerage',
            'title' => 'Customs Brokerage',
            'category' => 'Specialization',
            'desc' => 'Our services include filing customs declarations, obtaining necessary import/export permits, classifying and paying duties and taxes, and handling inspections.',
            'icon' => 'shield',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'Accurate classification, timely declarations, and strong relationships with authorities keep cargo moving through Maldivian ports. Our licensed brokers manage the paperwork so you can focus on your business.',
                'We support importers and exporters with duty calculation, permit applications, inspection coordination, and compliance advice tailored to Maldives Customs requirements.',
            ],
            'highlights' => [
                'Licensed customs brokerage and filings',
                'Import/export permit assistance',
                'Duty and tax calculation support',
                'Inspection and verification coordination',
            ],
        ],
        [
            'slug' => 'fcl-lcl-air-cargo',
            'title' => 'FCL, LCL & Air Cargo',
            'category' => 'Specialization',
            'desc' => 'Via our air freight and LCL cargo network from and to any country. We cooperate with exclusive cargo experts worldwide to deliver competitive freight charges.',
            'icon' => 'plane',
            'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=900&q=80',
            'wide' => false,
            'body' => [
                'Whether you need a full container, consolidated LCL space, or urgent air freight, we source competitive rates and manage booking through delivery. Our global partners help us move cargo into and out of the Maldives efficiently.',
                'You get a single point of contact for documentation, tracking, and last-mile connection to islands or inland destinations.',
            ],
            'highlights' => [
                'FCL, LCL, and air freight options',
                'Competitive international rates',
                'Door-to-door coordination where required',
                'Live status updates on every booking',
            ],
        ],
        [
            'slug' => 'vessel-fabrication-customization',
            'title' => 'Vessel Fabrication & Customization',
            'category' => 'Specialization',
            'desc' => 'Litus Maldives provides vessel fabrication and customization for marine survey operations, supporting geotechnical, geophysical, environmental, and coastal services with survey-ready layouts.',
            'icon' => 'wrench',
            'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=80',
            'wide' => true,
            'body' => [
                'Survey and specialist marine work often needs vessels adapted for equipment, crew flow, and deck layout. We fabricate and customise vessels to support geotechnical, geophysical, environmental, and coastal operations.',
                'Our focus is practical, survey-ready configurations that improve safety, workflow, and mission readiness for your marine programmes.',
            ],
            'highlights' => [
                'Custom layouts for survey and marine work',
                'Support for geotechnical and coastal operations',
                'Practical fabrication with operational input',
                'Safer, more efficient onboard workflows',
            ],
        ],
    ],

    'services_page' => [
        'eyebrow' => 'Our Services',
        'h1' => 'Our Services Make',
        'h1_accent' => 'Your Work More Productive',
        'intro' => 'We have been pioneering the industry in Maldives for 11+ years and delivering value products within the given timeframes, every single time.',
        'hero_image' => 'https://images.unsplash.com/photo-1494412519320-aa613dfb7738?auto=format&fit=crop&w=1800&q=85',
        'corporate' => [
            'eyebrow' => 'Corporate Service',
            'title' => 'We are the best at total logistics solutions.',
            'text' => 'We appreciate your trust greatly! Our clients choose us and our services because they know we\'re the best.',
            'cta' => 'More Information',
            'cta_route' => 'contact',
            'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1600&q=85',
            'badge_title' => 'Your Reliable Logistics Provider',
            'badge_text' => 'Safe • Secure • On Time',
        ],
        'features' => [
            ['icon' => 'users', 'label' => "Safe\nHandling"],
            ['icon' => 'clock', 'label' => "On-Time\nDelivery"],
            ['icon' => 'globe', 'label' => "Global\nNetwork"],
            ['icon' => 'timer', 'label' => "Real-Time\nTracking"],
        ],
        'gallery' => [
            'https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1494412519320-aa613dfb7738?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1540946485063-a40da27545f8?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=400&q=70',
            'https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?auto=format&fit=crop&w=400&q=70',
        ],
    ],

    'why_points' => [
        'Fast and reliable delivery across the Maldives and beyond.',
        'Experienced team with in-depth industry knowledge.',
        'Modern fleet and global logistics network.',
        'Customer-focused services tailored to your needs.',
        'Committed to safety, quality and excellence.',
    ],

    'home_stats' => [
        ['icon' => 'globe', 'value' => '150+', 'label' => 'Global Partners'],
        ['icon' => 'package', 'value' => '10K+', 'label' => 'Shipments Delivered'],
        ['icon' => 'users', 'value' => '98%', 'label' => 'Customer Satisfaction'],
        ['icon' => 'map-pin', 'value' => '25+', 'label' => 'Countries Served'],
    ],

    'partners' => [
        [
            'name' => 'Twig Logistics Network',
            'logo' => 'images/partner/viber_image_2023-02-16_10-01-03-182-150x150.png',
        ],
        [
            'name' => 'Global Logistics Network',
            'logo' => 'images/partner/viber_image_2023-02-16_10-13-25-747.png',
        ],
        [
            'name' => 'X2 Elite',
            'logo' => 'images/partner/viber_image_2023-02-16_10-13-26-617.png',
        ],
        [
            'name' => 'JCtrans.net',
            'logo' => 'images/partner/viber_image_2023-02-16_10-13-27-245-768x337.png',
        ],
    ],

    'testimonial' => [
        'quote' => 'LITUS Maldives: Setting the benchmark in logistics. Experience our excellence with seamless operations, secure handling, and efficient transport solutions that exceed expectations.',
        'name' => 'Mohamed Zahid',
        'role' => 'Group Chairman',
        'image' => 'images/home/Zaaa-120x120.jpg',
    ],

    'operations_images' => [0, 1, 2, 3, 4, 5, 6],

    'articles' => [
        ['tag' => 'LOGISTICS', 'date' => 'Mar 15, 2025', 'title' => 'New Cargo Routes Open Across Southern Atolls', 'excerpt' => 'Litus has launched two new scheduled routes serving Addu Atoll and Fuvahmulah, cutting delivery times by 40%.'],
        ['tag' => 'NEWS', 'date' => 'Feb 28, 2025', 'title' => 'Litus Partners with International Freight Network', 'excerpt' => 'A landmark agreement expands our door-to-door capabilities for international importers shipping into the Maldives.'],
        ['tag' => 'INSIGHTS', 'date' => 'Jan 12, 2025', 'title' => 'Island Supply Chain: Meeting Resort Demands Year-Round', 'excerpt' => 'We explore the logistical challenges of supplying luxury resorts through monsoon season.'],
    ],

    'faqs' => [
        ['q' => 'What areas does Litus cover?', 'a' => 'All 26 atolls — from Malé to the most remote islands — with scheduled and on-demand freight.'],
        ['q' => 'Do you handle customs documentation?', 'a' => 'Yes. Our licensed brokers manage all paperwork so your cargo clears without delay.'],
        ['q' => 'Can Litus handle time-sensitive shipments?', 'a' => 'Absolutely — priority express, air freight, and fast-boat charter are all available.'],
        ['q' => 'How do I get a quote?', 'a' => 'Call, email, or use the form below. We reply within 2 business hours.'],
    ],

    'sample_images' => [
        'https://images.unsplash.com/photo-1578922746465-3a80a228f223?w=1920&h=1080&fit=crop&auto=format',
        'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=1920&h=1080&fit=crop&auto=format',
        'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=1920&h=1080&fit=crop&auto=format',
        'https://www.litusmaldives.com/wp-content/uploads/2023/02/bg4-scaled.jpg',
        'https://www.litusmaldives.com/wp-content/uploads/2023/02/bg5-scaled.jpg',
        'https://www.litusmaldives.com/wp-content/uploads/2023/02/bg6-scaled.jpg',
        'https://www.litusmaldives.com/wp-content/uploads/2024/11/10-1024x1024.webp',
        'https://www.litusmaldives.com/wp-content/uploads/2024/11/9-1024x1024.webp',
        'https://www.litusmaldives.com/wp-content/uploads/2024/11/8-1024x1024.webp',
        'https://www.litusmaldives.com/wp-content/uploads/2024/11/7-1024x1024.webp',
        'https://www.litusmaldives.com/wp-content/uploads/2025/12/DSC09910-WebP-840x473.webp',
        'https://www.litusmaldives.com/wp-content/uploads/2025/07/MAIN-840x473.webp',
    ],

    'blog_posts' => [
        ['tag' => 'LOGISTICS', 'date' => 'Mar 15, 2025', 'title' => 'New Cargo Routes Open Across Southern Atolls', 'excerpt' => 'Litus Maldives has launched two new scheduled cargo routes serving Addu Atoll and Fuvahmulah, reducing delivery times to the southernmost islands by up to 40%.'],
        ['tag' => 'NEWS', 'date' => 'Feb 28, 2025', 'title' => 'Litus Maldives Partners with International Freight Network', 'excerpt' => 'A landmark agreement with a leading global freight forwarder expands our door-to-door capabilities for international importers shipping goods into the Maldives.'],
        ['tag' => 'INSIGHTS', 'date' => 'Jan 12, 2025', 'title' => 'Island Supply Chain: Meeting Resort Demands Year-Round', 'excerpt' => 'We explore the unique logistical challenges of supplying luxury resort properties in remote atolls and keeping supply chains running through monsoon season.'],
        ['tag' => 'INDUSTRY', 'date' => 'Dec 5, 2024', 'title' => 'The Future of Maritime Logistics in the Maldives', 'excerpt' => 'Rising sea freight costs, fleet modernisation, and digital tracking — we look at the trends reshaping logistics across the archipelago in the coming decade.'],
        ['tag' => 'LOGISTICS', 'date' => 'Nov 20, 2024', 'title' => 'Customs Brokerage: What Every Maldivian Importer Should Know', 'excerpt' => 'A practical guide to Maldives Customs Service procedures, duty rates, and how professional brokerage saves time and avoids costly clearance delays.'],
        ['tag' => 'NEWS', 'date' => 'Oct 9, 2024', 'title' => 'Litus Maldives Fleet Expansion: Two New Vessels', 'excerpt' => 'We welcomed two new cargo vessels to our inter-atoll fleet, increasing weekly freight capacity by 35% and enabling direct connections to 18 additional islands.'],
    ],

    'about' => [
        'eyebrow' => 'ABOUT US',
        'h1' => 'Delivering Excellence.',
        'h1_accent' => 'Building Trust.',
        'intro' => 'LITUS Maldives Pvt Ltd is a reputable project logistics management company that offers comprehensive logistics solutions, providing end-to-end logistics services including transportation of supplies and equipment, supply chain management, customs clearance, warehousing, and rentals, all tailored to meet our clients’ unique needs.',
        'vision' => 'Most preferred logistics partner!',
        'mission' => 'To provide end-to-end total logistics solutions.',
        'hero_image' => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=1920&h=1080&fit=crop&auto=format',
        'specialty_image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=900&fit=crop&auto=format',
    ],

    'team' => [
        [
            'name' => 'Mohamed Zahid',
            'role' => 'CEO',
            'image' => 'images/home/Zaaa-120x120.jpg',
            'linkedin' => '#',
        ],
        [
            'name' => 'Asif Rasheed',
            'role' => 'Chief Strategy & Marketing Officer',
            'image' => null,
            'linkedin' => '#',
        ],
        [
            'name' => 'Kalpesh Thilanka',
            'role' => 'Manager',
            'image' => null,
            'linkedin' => '#',
        ],
        [
            'name' => 'Ali Waseem',
            'role' => 'Manager',
            'image' => null,
            'linkedin' => '#',
        ],
    ],

    'key_members' => [
        [
            'name' => 'Bishal Shah',
            'role' => 'Logistics Executive',
            'image' => 'https://www.litusmaldives.com/wp-content/uploads/2024/11/9-1024x1024.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'Mohamed Farhad',
            'role' => 'Clearance Officer',
            'image' => 'https://www.litusmaldives.com/wp-content/uploads/2024/11/8-1024x1024.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'Idrees Rahman',
            'role' => 'Clearance Officer',
            'image' => 'https://www.litusmaldives.com/wp-content/uploads/2024/11/7-1024x1024.webp',
            'linkedin' => '#',
        ],
    ],

    'specialties' => [
        'Experienced and professional team ensuring high-quality service.',
        'Strong connection with authorities (Customs Authority, Ports Limited).',
        'High-quality service with a strong focus on reliability.',
        'Established delivery network for reliable and on-time shipments.',
        'Real-time shipment tracking and updates.',
        'Assistance with import/export license renewals.',
    ],

    'gallery_items' => [
        ['cat' => 'Cargo', 'title' => 'Container Loading', 'span' => 2, 'tall' => true],
        ['cat' => 'Vessels', 'title' => 'Inter-Atoll Ferry', 'span' => 1, 'tall' => false],
        ['cat' => 'Operations', 'title' => 'Warehouse Operations', 'span' => 1, 'tall' => false],
        ['cat' => 'Cargo', 'title' => 'General Cargo Handling', 'span' => 1, 'tall' => true],
        ['cat' => 'Team', 'title' => 'Logistics Team', 'span' => 1, 'tall' => false],
        ['cat' => 'Vessels', 'title' => 'Vessel at Anchor', 'span' => 1, 'tall' => false],
        ['cat' => 'Operations', 'title' => 'Customs Clearance', 'span' => 2, 'tall' => false],
        ['cat' => 'Cargo', 'title' => 'Air Freight', 'span' => 1, 'tall' => false],
        ['cat' => 'Team', 'title' => 'Port Operations Team', 'span' => 1, 'tall' => false],
        ['cat' => 'Vessels', 'title' => 'Cargo Barge', 'span' => 1, 'tall' => false],
        ['cat' => 'Operations', 'title' => 'Island Delivery', 'span' => 1, 'tall' => false],
        ['cat' => 'Cargo', 'title' => 'FCL Container Yard', 'span' => 2, 'tall' => false],
    ],

    'contact' => [
        'address' => 'Ma. Dydum, 2nd Floor, Buruzu Magu, 20340, Malé',
        'phones' => ['+960 797 9055', '+960 779 7172'],
        'email' => 'sales@litusmaldives.com',
        'ops_email' => 'ops@litusmaldives.com',
        'hours' => 'Sun–Thu: 8:00 AM – 5:00 PM',
        'map_embed' => 'https://maps.google.com/maps?q=Ma.+Dydum,+2nd+Floor,+Buruzu+Magu,+20340,+Mal%C3%A9,+Maldives&hl=en&z=15&output=embed',
        'map_full' => 'https://www.google.com/maps/search/?api=1&query=Ma.+Dydum,+Buruzu+Magu,+Mal%C3%A9,+Maldives',
        'facebook' => 'https://www.facebook.com/litusmaldives',
        'instagram' => 'https://www.instagram.com/litusmaldives',
    ],
];
