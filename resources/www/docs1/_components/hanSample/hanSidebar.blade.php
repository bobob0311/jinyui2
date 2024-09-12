@php
    $jsonData = '{
            "items": {
                "1": {
                    "code": "navlink",
                    "name": "기능1",
                    "navlink": "/ui_components/accordion",
                    "ref": 0,
                    "level": 1,
                    "id": 1
                },
                "2": {
                    "code": "navlink",
                    "name": "기능2",
                    "navlink": "/ui_components/alert",
                    "ref": 0,
                    "level": 1,
                    "id": 2
                },
                "3": {
                    "code": "navlink",
                    "name": "기능3",
                    "navlink": "/ui_components/badge",
                    "ref": 0,
                    "level": 1,
                    "id": 3
                },
                "4": {
                    "code": "navlink",
                    "name": "기능4",
                    "navlink": "/ui_components/breadcrumb",
                    "ref": 0,
                    "level": 1,
                    "id": 4
                },
                "5": {
                    "code": "navlink",
                    "name": "기능5",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 5
                },
                "6": {
                    "code": "navlink",
                    "name": "기능6",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 6
                },
                "7": {
                    "code": "navlink",
                    "name": "기능7",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 7
                },
                "8": {
                    "code": "navlink",
                    "name": "기능8",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 8
                },
                "9": {
                    "code": "navlink",
                    "name": "기능9",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 9
                },
                "10": {
                    "code": "navlink",
                    "name": "기능10",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 10
                },
                "11": {
                    "code": "navlink",
                    "name": "기능11",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 11
                },
                "12": {
                    "code": "navlink",
                    "name": "기능12",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 12
                },
                "13": {
                    "code": "navlink",
                    "name": "기능13",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 13
                },
                "14": {
                    "code": "navlink",
                    "name": "기능14",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 14
                },
                "15": {
                    "code": "navlink",
                    "name": "기능15",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 15
                },
                "16": {
                    "code": "navlink",
                    "name": "기능16",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 16
                },
                "17": {
                    "code": "navlink",
                    "name": "기능17",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 17
                },
                "18": {
                    "code": "navlink",
                    "name": "기능18",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 18
                },
                "19": {
                    "code": "navlink",
                    "name": "기능19",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 19
                },
                "20": {
                    "code": "navlink",
                    "name": "기능20",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 20
                },
                "21": {
                    "code": "navlink",
                    "name": "기능21",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 21
                },
                "22": {
                    "code": "navlink",
                    "name": "기능22",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 22
                },
                "23": {
                    "code": "navlink",
                    "name": "기능23",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 23
                },
                "24": {
                    "code": "navlink",
                    "name": "기능24",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 24
                },
                "25": {
                    "code": "navlink",
                    "name": "기능25",
                    "navlink": "/ui_components/tooltips",
                    "ref": 0,
                    "level": 1,
                    "id": 25
                }
            }
        }
        ';

    $items = json_decode($jsonData, true)['items'];
@endphp


<aside class="col-lg-3 pe-xl-4">

            <div class="cd-sidebar"
    data-filter-list='{"searchClass": "docs-search", "listClass": "docs-list", "valueNames": ["list-group-item"]}'>
    <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1"
        aria-labelledby="sidebarNavLabel">

        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav"
                aria-label="Close"></button>
        </div>

        <div class="position-relative mx-4 ms-lg-0 mb-4">
            <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
        </div>

        <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
            <div id="scrollable" class="h-100 overflow-y-auto pe-4">
                <nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()">

                    @foreach($items as $item)
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                                href="{{ $item['navlink'] }}">

                                {{ $item['name'] }}
                                <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile
                                    scripts:minify icon-font vendor validate watch dist</span>
                            </a>
                        </div>

                    @endforeach
                    <!-- <li>
    @foreach($items as $item) -->
                    <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                    <!-- <a href="{{ $item['navlink'] }}"
            class="group flex gap-x-6 rounded-md p-2 text-sm font-semibold leading-6 text-black {{ request()->is(ltrim($item['navlink'], '/')) ? 'bg-gray-300' : '' }}">

            {{ $item['name'] }}
        </a>
    @endforeach
</li> -->

                </nav>
            </div>
        </div>
    </div>
</div>
        </aside>