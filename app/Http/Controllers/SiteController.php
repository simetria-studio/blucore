<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{
    public function index() {
        // Dados estruturados para a página inicial
        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => config('app.name'),
            'url' => url('/'),
            'description' => 'Descrição otimizada da sua página inicial para mecanismos de busca.'
        ];

        if (Cache::has('site.index')) {
            return Cache::get('site.index');
        }
        
        $view = view('site.index', compact('jsonLd'))->render();
        Cache::put('site.index', $view, 3600);
        
        return $view;
    }

    public function contato() {
        // Dados estruturados para a página de contato
        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Contato - ' . config('app.name'),
            'url' => url('/contato'),
            'description' => 'Entre em contato conosco. Estamos prontos para atender suas necessidades.'
        ];

        if (Cache::has('site.contato')) {
            return Cache::get('site.contato');
        }
        
        $view = view('site.contato', compact('jsonLd'))->render();
        Cache::put('site.contato', $view, 3600);
        
        return $view;
    }
}
