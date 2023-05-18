<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\BrandRepository;
use App\Repositories\FarmerRepository;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Dashboard extends Component
{
    public $pageTitle = 'Dashboard';
    public $icon = 'fas fa-chart-line';


    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.dashboard');
    }


}
