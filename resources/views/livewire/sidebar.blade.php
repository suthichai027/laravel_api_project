<div class="sidebar">
    <div class="sidebar-header">
        <div class="text-center">The Orange Buriram</div>
    </div>
    <div class="sidebar-body">
        <div class="menu">
            <ul>
                <li wire:click="changeMenu('dashboard')" @if ($currentMenu == 'dashboard') class="active" @endif>
                    <i class="fa-solid fa-chart-line me-2"></i>Dashboard
                </li>
                <li wire:click="changeMenu('pay')" @if ($currentMenu == 'pay') class="active" @endif>
                    <i class="fa-solid fa-file-invoice-dollar me-2"></i>บันทึกค่าใช้จ่าย
                </li>
                <li wire:click="changeMenu('room')" @if ($currentMenu == 'room') class="active" @endif>
                    <i class="fa-solid fa-bed me-2"></i>ห้องพัก
                </li>
                <li wire:click="changeMenu('customer')" @if ($currentMenu == 'customer') class="active" @endif>
                    <i class="fa-solid fa-user me-2"></i>ผู้เข้าพัก
                </li>
                <li wire:click="changeMenu('user')" @if ($currentMenu == 'user') class="active" @endif>
                    <i class="fa-solid fa-users-gear me-2"></i>ผู้ใช้งาน
                </li>
                <li wire:click="changeMenu('company/index')" @if ($currentMenu == 'company/index') class="active" @endif>
                    <i class="fa-solid fa-building me-2"></i>ข้อมูลสถานประกอบการ
                </li>
            </ul>
        </div>
    </div>
</div>
