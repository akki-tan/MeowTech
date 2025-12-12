 @props(['active' => false])
 <a {{ $attributes }} class="-mx-3 block rounded-lg px-3 py-2  text-sm/16 font-semibold {{ $active ? 'bg-untuktext text-untukbg' : 'text-untuktext hover:text-untuktext hover:bg-untukbg'}}"
    aria-current="{$active : 'page' : false}">{{ $slot }}</a>

    