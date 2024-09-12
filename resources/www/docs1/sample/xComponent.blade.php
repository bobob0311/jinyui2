 <x-www_hanApp>
        <x-www_hanHeader>
        <x-www_hanTitle>
            한이음 프로젝트
        </x-www_hanTitle>

                <x-www_hanNav>
            <x-www_hanNavItem>
                <x-www_hanItem>
                    nav1
                </x-www_hanItem>
                <x-www_hanItem>
                    nav2
                </x-www_hanItem>
                <x-www_hanItem>
                    nav3
                </x-www_hanItem>
            </x-www_hanNavItem>
        </x-www_hanNav>
</x-www_hanHeader>
<x-www_hanLayout>
        <x-www_hanSidebar>

        </x-www_hanSidebar>
        
        <x-www_hanContent>

                    @livewire('WidgetTitle', [
    'filename' => 'hanTitle',

])
<div class="flex justify-between">

    <div>
        <div class="flex text-white gap-10 text-center justify-center items-center my-12">
            <div class="shadow-sm bg-rose-500 w-32 h-32 flex justify-center items-center">
                tailwind1
            </div>
            <div class="rounded-full bg-rose-500 w-32 h-32 flex justify-center items-center">
                tailwind2
            </div>

        </div>

        <div class="d-flex justify-content-center text-white text-center" style="gap: 2.5rem;">
            <div class="shadow-sm d-flex justify-content-center align-items-center bg-primary"
                style="width: 8rem; height: 8rem;">
                bootstrap1
            </div>
            <div class="rounded-circle d-flex justify-content-center align-items-center bg-primary"
                style="width: 8rem; height: 8rem;">
                bootstrap2
            </div>

        </div>
    </div>


               @php
                $container = new \Jiny\Html\CDiv();

                // Tailwind 사용 부분
                $tailwindContainer = new \Jiny\Html\CDiv();
                $tailwindContainer->setAttribute('class', 'flex text-white gap-10 text-center justify-center items-center my-12');

                $tailwindDiv1 = new \Jiny\Html\CDiv('tailwind1');
                $tailwindDiv1->setAttribute('class', 'shadow-sm bg-rose-500 w-32 h-32 flex justify-center items-center');
                $tailwindContainer->addItem($tailwindDiv1);

                $tailwindDiv2 = new \Jiny\Html\CDiv('tailwind2');
                $tailwindDiv2->setAttribute('class', 'rounded-full bg-rose-500 w-32 h-32 flex justify-center items-center');
                $tailwindContainer->addItem($tailwindDiv2);

                $container->addItem($tailwindContainer);

                // Bootstrap 사용 부분
                $bootstrapContainer = new \Jiny\Html\CDiv();
                $bootstrapContainer->setAttribute('class', 'd-flex justify-content-center text-white text-center');
                $bootstrapContainer->setAttribute('style', 'gap: 2.5rem;');

                $bootstrapDiv1 = new \Jiny\Html\CDiv('bootstrap1');
                $bootstrapDiv1->setAttribute('class', 'shadow-sm d-flex justify-content-center align-items-center bg-primary');
                $bootstrapDiv1->setAttribute('style', 'width: 8rem; height: 8rem;');
                $bootstrapContainer->addItem($bootstrapDiv1);

                $bootstrapDiv2 = new \Jiny\Html\CDiv('bootstrap2');
                $bootstrapDiv2->setAttribute('class', 'rounded-circle d-flex justify-content-center align-items-center bg-primary');
                $bootstrapDiv2->setAttribute('style', 'width: 8rem; height: 8rem;');
                $bootstrapContainer->addItem($bootstrapDiv2);

                $container->addItem($bootstrapContainer);

                $content = $container->toString();
            @endphp

{!!$content!!}
</div>

        </x-www_hanContent>
    
    </x-www_hanLayout>
        
    <x-www_hanFooter>
        <x-www_hanItem>
            nav1
        </x-www_hanItem>
        <x-www_hanItem>
            nav2
        </x-www_hanItem>
        <x-www_hanItem>
            nav3
        </x-www_hanItem>
        <x-www_hanItem>
            nav4
        </x-www_hanItem>
        <x-www_hanItem>
            nav5
        </x-www_hanItem>
    </x-www_hanFooter>
</x-www_hanApp>