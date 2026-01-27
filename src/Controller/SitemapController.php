<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SitemapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(UrlGeneratorInterface $urlGenerator): Response
    {
        $hostname = 'https://www.irci.fr'; // À modifier selon votre domaine
        
        $urls = [];
        
        // Pages principales avec priorités
        $pages = [
            ['route' => 'home', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['route' => 'prestations', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['route' => 'about', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['route' => 'contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];
        
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => $hostname . $urlGenerator->generate($page['route']),
                'lastmod' => date('Y-m-d'),
                'changefreq' => $page['changefreq'],
                'priority' => $page['priority'],
            ];
        }
        
        $response = $this->render('sitemap/index.xml.twig', [
            'urls' => $urls,
        ]);
        
        $response->headers->set('Content-Type', 'text/xml');
        
        return $response;
    }
}
