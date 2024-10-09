<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */
/**
 * Doctype Hook
 * 
 * @hooked jobscout_doctype
 */
do_action('jobscout_doctype');
?>

<head itemscope itemtype="https://schema.org/WebSite">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* #content.site-content{
            background-color: #7387a3;
        } */
        .job-article {
            background-color: #fde7d8 !important; /* Skin tone color */
        }



        .shadow-all-sides {
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.3);
        }

        /* jobs section */
        .jobs {
            transition: transform 0.3s ease-in-out;
            /* Add transition for smooth scaling */
        }

        .jobs:hover {
            transform: scale(1.05);
            /* Scale up by 5% on hover */
        }

        .card.hover:hover .card-title {
            color: #28a745;
            /* Change color on hover */
        }

        .nav-footer .nav-link {
            color: black;
        }
    </style>

    <?php
    /**
     * Before wp_head
     * 
     * @hooked jobscout_head
     */
    do_action('jobscout_before_wp_head');

    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">


    <?php
    wp_body_open();

    /**
     * Before Header
     * @hooked jobscout_responsive_header - 15
     * @hooked jobscout_page_start - 20 
     */
    do_action('jobscout_before_header');

    /**
     * Header
     * 
     * @hooked jobscout_header - 20     
     */
    do_action('jobscout_header');

    /**
     * Content
     * 
     * @hooked jobscout_breadcrumbs_bar
     */
    do_action('jobscout_after_header');


    /**
     * Content
     * 
     * @hooked jobscout_content_start
     */
    do_action('jobscout_content');
