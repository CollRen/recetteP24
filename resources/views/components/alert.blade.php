<div @class([
    'alert absolute z-10 top-0 w-full flex justify-center items-center bg-blue-500 p-5 text-xl text-white',
    'bg-red-500' =>$type=='danger',
    'bg-amber-500' =>$type=='warning',
    'bg-green-500' =>$type=='success',
])>
{{ $slot }}
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>