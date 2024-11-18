<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Dashboard1Admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Dashboard</title>




























  </head>
  <body>
    <!-- Dashboard Admin Session -->
    <div class= "dashboard1-admin">
      <div class = "columnathletezo">
        {{-- header section --}}
        <header class = "header">
          <div class = "header_row">
            <div class = "header_row--athlete-zone">
              <img 
              src="" 
              alt=""
              class=""
              />
              <img src="" alt="">
            </div>
            <div class = "header_row--search">
              <label class="header_search">
                <div class = "dhi-group">
                  <img src="" alt="">
                </div>
                <input name="Search Field" placeholder= "Search..." type="text"/>
              </label>
              <img src="" alt="">
            </div>
          </div>
        </header>
        <div class="newscreenbody">
          {{-- sidebar navigation section --}}
          <aside class="sidebar">
            <h3 class="ui heading size-headingmd">Dashboard</h3>
            <ul class="sidebar_menu">
              <li>
                <a class="submenu">
                  <span> Order </span>
                  <img 
                  src="" 
                  alt=""
                  data-icon="collapse"
                  class="arrowdown-one"
                  />
                  <img 
                  src="" 
                  alt=""
                  data-icon="collapse"
                  class="arrowdown-one"
                  />
                </a>
                <ul class="dhi-group-1">
                  <li>
                    <a>
                      <span> Submenu Item</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="submenu">
                  <span> Library </span>
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                </a>
                <ul class="dhi-group-1">
                  <li>
                    <a>
                      <span> Submenu Item </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="submenu">
                  <span> Reports </span>
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                </a>
                <ul class="dhi-group-1">
                  <li>
                    <a>
                      <span> Submenu Item </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="submenu">
                  <span> Reviews </span>
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                  <img 
                  src="" 
                  alt=""
                  data-icon=""
                  class=""
                  />
                </a>
                <ul class="dhi-group-1">
                  <li>
                    <a>
                      <span> Submenu Item </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </aside>

          {{-- main content section --}}
          <div class="dashboard_column">
            <h1 class="dashboard_title ui heading size-headinglg"> Dashboard</h1>
            <div class="dashboard_list">
              <div class="gross-sales-profile">
                <div class="gross-sales-profile_row">
                  <img src="" alt="">
                  <div class="gross-sales-profile_column">
                    <p class="gross-sales-profile_title ui text size-textmd">Gross Sales</p>
                    <h2 class="gross-sales-profile_amount ui heading size-headings">Rp. 100.000.000</h2>
                  </div>
                </div>
              </div>
              <div class="gross-sales-profile">
                <div class="gross-sales-profile_row">
                  <img src="" alt="">
                  <div class="gross-sales-profile_column">
                    <p class="gross-sales-profile_title ui text size-textmd">Net Sales</p>
                    <h2 class="gross-sales-profile_amount ui heading size-headings">Rp. 90.000.000</h2>
                  </div>
                </div>
              </div>
              <div class="gross-sales-profile-2">
                <div class="gross-sales-profile_row">
                  <img src="" alt="">
                  <div class="gross-sales-profile_column">
                    <p class="gross-sales-profile_title ui text size-textmd">Gross Sales</p>
                    <h2 class="gross-sales-profile_amount ui heading size-headings">Rp. 100.000.000</h2>
                  </div>
                </div>
              </div>
            </div>

            {{-- top categories section --}}
            <div class="dashboard_top_categories">
              <div class="top-categories_row">
                <div class="top-categories_column">
                  <h5 class="dashboard_title ui heading size-headings"> TOP 3 CATEGORIES </h5>
                  <div class="top-categories_content-row">
                    <div class="content-row_categories">
                      <div class="categories_item">
                        <h6 class="categories_amount ui heading size-headingxs">Rp. 45.000.000</h6>
                        <p class="ui text size texts">Shoes</p>
                      </div>
                      <div class="categories_item">
                        <h6 class="categories_amount ui heading size-headingxs">Rp. 45.000.000</h6>
                        <p class="ui text size texts">Jerseys</p>
                      </div>
                      <div class="categories_item">
                        <h6 class="categories_amount ui heading size-headingxs">Rp. 20.500.000</h6>
                        <p class="ui text size texts">Socks</p>
                      </div>
                    </div>
                    <div class="content-row_stack">
                      <div class="stack_categories-column">
                        <div class="categories-column_row">
                          <div class="categories-row_item-row">
                            <p class="item-row_label ui text size-textxs">Shoes</p>
                            <p class="item-row_label-1 ui text size-textxs">Jerseys</p>
                            <p class="item-row_label-2 ui text size-textxs">Socks</p>
                          </div>
                          <p class="categories-column_label ui text size-textxs">Pants</p>
                        </div>
                        <div class="stack_view"></div>
                      </div>
                      <p class="stack_label ui text size-textxs">Caps</p>
                      <div data-progress="12" style="--progress: 12%" class="stack_progress-circle"></div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- footer view section --}}
              <div class="dashboard_view"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

