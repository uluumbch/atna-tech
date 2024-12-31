<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PriceCard extends Component
{
    public $includedFeatures;
    public $excludedFeatures;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public int $originalPrice,
        public int $discountPrice,
        public array $features,
        public int $includedFeaturesCount,
        public string $buttonText = 'Pilih Paket',
        public string $modalTarget = '',
        public string $buttonClass = 'bg-primary-700 hover:bg-primary-800'
    )
    {
        $this->includedFeatures = array_slice($features, 0, $includedFeaturesCount);
        $this->excludedFeatures = array_slice($features, $includedFeaturesCount);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.price-card');
    }
}
