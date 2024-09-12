<!-- Page footer -->
<footer class="footer w-full absolute bottom-0 py-4  mt-96" style="background-color:#eeeeee;">
    <div class="container ">
        <div class="    ">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class=" ">
                <ul class="flex flex-row justify-between w-100 list-none no-underline p-0 text-center">
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
                </ul>
            </div>

            <!-- Subscription -->
            <!-- <div class="col-md-4 offset-xl-1">
                @partials('footer_joinus')
            </div> -->
        </div>

        <!-- Social account links -->
        @partials('footer_social_link')

        <!-- Copyright + Payment methods -->
        <div class="d-lg-flex align-items-center border-top ">
            <!-- <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
                @partials('footer_copyright')
            </div> -->
            <!-- <div class="d-md-flex justify-content-center order-lg-1">
                @partials('footer_payment')
            </div> -->
        </div>

    </div>
</footer>