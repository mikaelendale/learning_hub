<!-- resources/views/components/breadcrumb.blade.php -->
<div class="flex items-center gap-5">
    <h1 class="font-medium text-lg text-gray-900">
        {{ $title }}
    </h1>
    <div class="flex items-center gap-1 text-sm font-normal">
        @isset($li_1)
            <span class="text-gray-700">
                {{ $li_1 }}
            </span>
            <span class="text-gray-400 text-sm">
                /
            </span>
        @endisset
        <span class="text-gray-900">
            {{ $title }}
        </span>
    </div>
</div>
<div class="flex items-center gap-1">
    <a class="btn btn-light btn-sm" href="/profile">
        View Profile
    </a>
</div>
