<?php
    namespace App\Enums;

    enum Status : string {
        case active = 'Active';
        case vehicle_inspection_expired = 'Vehicle Inspection Expired';
        case insurance_expired = 'Insurance Expired';
        case crashed = 'Crashed';
        case in_maintenance = 'In Maintenance';
    }
