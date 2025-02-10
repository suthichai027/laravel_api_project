<div class="mx-auto flex flex-col items-center justify-center h-screen bg-gradient-to-tr from-orange-500 to-white">
    <div class="w-full max-w-md border border-orange-400 rounded-md p-4 bg-white">
        <div class="text-2xl font-bold">
            <i class="fa fa-user me-2"></i>
            Sign In To Backoffice
        </div>
        <form class="mt-5" wire:submit="signin">
            <div>Username</div>
            <input type="text" wire:model="username" class="form-control" placeholder="Username">
            @if (isset($errorUsername))
                <div class="text-red-600 mt-2 text-sm">
                    {{ $errorUsername }}
                </div>
            @endif

            <div class="mt-4">Password</div>
            <input type="password" wire:model="password" class="form-control" placeholder="Password">
            @if (isset($errorPassword))
                <div class="text-red-600 mt-2 text-sm">
                    {{ $errorPassword }}
                </div>
            @endif
            <button type="submit" class="btn btn-primary mt-5">Sign In</button>
        </form>
        @if (isset($error))
            <div class="text-red-500 mt-4">
                <i class="fa fa-exclamation-triangle me-2"></i>
                {{ $error }}
            </div>
        @endif
    </div>
</div>
