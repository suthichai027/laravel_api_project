<div>
    <div class="content-header">ข้อมูลสถานประกอบการ</div>
    <form wire:submit="save">
        <div class="flex gap-3">
            <div class="w-1/3">
                <div>
                    <label for="name">ชื่อสถานประกอบการ</label>
                    <input type="text" wire:model="name" class="form-control">
                </div>
            </div>
            <div class="w-1/3">
                <div>
                    <label for="address">ที่อยู่</label>
                    <input type="text" wire:model="address" class="form-control">
                </div>
            </div>
            <div class="w-1/3">
                <div>
                    <label for="phone">เบอร์โทรศัพท์</label>
                    <input type="text" wire:model="phone" class="form-control">
                </div>
            </div>
        </div>

        <div class="mt-3">
            <label for="tax_code">เลขประจําตัวผู้เสียภาษี</label>
            <input type="text" wire:model="tax_code" class="form-control">
        </div>

        <div class="mt-3">
            @if ($logoUrl)
                <img src="{{ $logoUrl }}" alt="Logo" class="w-16 h-16 mb-3 rounded-md shadow-lg">
            @endif
            <label for="logo">รูปโลโก้</label>
            <input type="file" wire:model="logo" class="form-control bg-white">
        </div>

        <button type="submit" class="btn-primary mt-3">
            <i class="fa-solid fa-floppy-disk me-2"></i>บันทึก
        </button>

        @if ($flashMessage)
            <div class="mt-3 alerl alerl-success">
                <i class="fa fa-check mr-2"></i>
                {{ $flashMessage }}
            </div>
        @endif
    </form>
</div>
