<!-- Left Sidebar Start -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled sidebar__menu" id="side-menu">
                <li>
                    <a href="{{route('agent.dashboard')}}">
                        <i>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 1H2C1.44772 1 1 1.44772 1 2V9C1 9.55229 1.44772 10 2 10H7C7.55228 10 8 9.55229 8 9V2C8 1.44772 7.55228 1 7 1Z"
                                    stroke="#737C90" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M18 1H13C12.4477 1 12 1.44772 12 2V5C12 5.55228 12.4477 6 13 6H18C18.5523 6 19 5.55228 19 5V2C19 1.44772 18.5523 1 18 1Z"
                                    stroke="#737C90" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M18 10H13C12.4477 10 12 10.4477 12 11V18C12 18.5523 12.4477 19 13 19H18C18.5523 19 19 18.5523 19 18V11C19 10.4477 18.5523 10 18 10Z"
                                    stroke="#737C90" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M7 14H2C1.44772 14 1 14.4477 1 15V18C1 18.5523 1.44772 19 2 19H7C7.55228 19 8 18.5523 8 18V15C8 14.4477 7.55228 14 7 14Z"
                                    stroke="#737C90" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </i>
                        <span>{{__("Dashboard")}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('agent.ticket.create-ticket')}}" class="profileImg">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M16 9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13C10.9391 13 9.92172 12.5786 9.17157 11.8284C8.42143 11.0783 8 10.0609 8 9C8 7.93913 8.42143 6.92172 9.17157 6.17157C9.92172 5.42143 10.9391 5 12 5C13.0609 5 14.0783 5.42143 14.8284 6.17157C15.5786 6.92172 16 7.93913 16 9ZM14 9C14 9.53043 13.7893 10.0391 13.4142 10.4142C13.0391 10.7893 12.5304 11 12 11C11.4696 11 10.9609 10.7893 10.5858 10.4142C10.2107 10.0391 10 9.53043 10 9C10 8.46957 10.2107 7.96086 10.5858 7.58579C10.9609 7.21071 11.4696 7 12 7C12.5304 7 13.0391 7.21071 13.4142 7.58579C13.7893 7.96086 14 8.46957 14 9Z"
                                      fill="#737C90"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 1C5.925 1 1 5.925 1 12C1 18.075 5.925 23 12 23C18.075 23 23 18.075 23 12C23 5.925 18.075 1 12 1ZM3 12C3 14.09 3.713 16.014 4.908 17.542C5.74723 16.4399 6.8299 15.5467 8.07143 14.9323C9.31297 14.3179 10.6797 13.9988 12.065 14C13.4323 13.9987 14.7819 14.3095 16.0109 14.9088C17.2399 15.508 18.316 16.3799 19.157 17.458C20.0234 16.3216 20.6068 14.9952 20.8589 13.5886C21.111 12.182 21.0244 10.7355 20.6065 9.36898C20.1886 8.00243 19.4512 6.75505 18.4555 5.73004C17.4598 4.70503 16.2343 3.93186 14.8804 3.47451C13.5265 3.01716 12.0832 2.88877 10.6699 3.09997C9.25652 3.31117 7.91379 3.85589 6.75277 4.68905C5.59175 5.52222 4.64581 6.61987 3.99323 7.8912C3.34065 9.16252 3.00018 10.571 3 12ZM12 21C9.93395 21.0031 7.93027 20.2923 6.328 18.988C6.97293 18.0647 7.83134 17.3109 8.83019 16.7907C9.82905 16.2705 10.9388 15.9992 12.065 16C13.1772 15.9991 14.2735 16.2636 15.2629 16.7714C16.2524 17.2793 17.1064 18.0159 17.754 18.92C16.1393 20.2667 14.1026 21.0029 12 21Z"
                                      fill="#737C90"/>
                            </svg>
                        </i>
                        <span>{{__("Create Ticket")}}</span>
                    </a>
                </li>
                <li class="{{ @$navMain }}">
                    <a href="#" class="has-arrow">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.5 5.77778V6.55556M16.5 9.66667V10.4444M16.5 13.5556V14.3333M16.5 17.4444V18.2222M7.5 12.7778H12.75M7.5 15.1111H10.5M3.375 5C2.754 5 2.25 5.52267 2.25 6.16667V9.30474C2.70675 9.57746 3.08612 9.97018 3.34992 10.4434C3.61371 10.9165 3.7526 11.4534 3.7526 12C3.7526 12.5466 3.61371 13.0835 3.34992 13.5566C3.08612 14.0298 2.70675 14.4225 2.25 14.6953V17.8333C2.25 18.4773 2.754 19 3.375 19H20.625C21.246 19 21.75 18.4773 21.75 17.8333V14.6953C21.2933 14.4225 20.9139 14.0298 20.6501 13.5566C20.3863 13.0835 20.2474 12.5466 20.2474 12C20.2474 11.4534 20.3863 10.9165 20.6501 10.4434C20.9139 9.97018 21.2933 9.57746 21.75 9.30474V6.16667C21.75 5.52267 21.246 5 20.625 5H3.375Z"
                                    stroke="#737C90" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </i>
                        <span>{{__('Tickets')}}</span>

                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <div class="pb-4">
                            <li><a href="{{route('agent.ticket.all-ticket')}}">{{__('All Tickets')}}</a></li>
                            <li><a href="{{route('agent.ticket.recent-ticket')}}">{{__('Recent Tickets')}}</a></li>
                            <li><a href="{{route('agent.ticket.active-ticket')}}">{{__('Active Tickets')}}</a></li>
                            <li><a href="{{route('agent.ticket.my-assigned-ticket')}}">{{__("My Assigned Tickets")}}</a>
                            </li>
                            <li><a href="{{route('agent.ticket.resolvedTicketList')}}">{{__("Resolved Tickets")}}</a>
                            </li>
                            <li><a href="{{route('agent.ticket.closed-tickets')}}">{{__("Closed Tickets")}}</a></li>
                            <li><a href="{{route('agent.ticket.suspend-ticket')}}">{{__("Suspend Tickets")}}</a></li>
                            <li><a href="{{route('agent.ticket.on-hold-tickets')}}">{{__("On Hold Tickets")}}</a></li>
                            <li><a href="{{route('agent.ticket.deleted-tickets')}}">{{__("Trashed Tickets")}}</a></li>
                        </div>
                    </ul>
                </li>

                <li>
                    <a href="{{route('agent.envato.license-verification')}}" class="profileImg">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9348 2.15389C17.3486 1.82868 15.6684 2.02977 13.6503 2.65446C10.1185 5.06851 7.13788 8.62513 6.92973 14.3366C6.89192 14.4733 6.54371 14.318 6.4747 14.2758C5.52092 12.4478 5.1431 10.5229 5.93951 7.74606C6.088 7.49896 5.60246 7.19492 5.51546 7.28146C5.34055 7.45682 4.61201 8.23296 4.12806 9.07242C1.72905 13.2339 3.29772 18.566 7.49498 20.8997C11.6911 23.2367 16.9899 21.7291 19.3263 17.5316C22.0294 12.6871 19.5194 3.03866 17.9348 2.15389Z" fill="#737C90"/>
                            </svg>

                        </i>
                        <span>{{__("Envato")}}</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('agent.profile.index')}}" class="profileImg">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z" fill="#737C90"/>
                            </svg>

                        </i>
                        <span>{{__("Setting")}}</span>
                    </a>
                </li>

                @if(getOption('chat_setting_status') == 1)
                <li>
                    <a href="{{route('agent.live-chat.inbox')}}" class="profileImg">
                        <i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M16 9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13C10.9391 13 9.92172 12.5786 9.17157 11.8284C8.42143 11.0783 8 10.0609 8 9C8 7.93913 8.42143 6.92172 9.17157 6.17157C9.92172 5.42143 10.9391 5 12 5C13.0609 5 14.0783 5.42143 14.8284 6.17157C15.5786 6.92172 16 7.93913 16 9ZM14 9C14 9.53043 13.7893 10.0391 13.4142 10.4142C13.0391 10.7893 12.5304 11 12 11C11.4696 11 10.9609 10.7893 10.5858 10.4142C10.2107 10.0391 10 9.53043 10 9C10 8.46957 10.2107 7.96086 10.5858 7.58579C10.9609 7.21071 11.4696 7 12 7C12.5304 7 13.0391 7.21071 13.4142 7.58579C13.7893 7.96086 14 8.46957 14 9Z"
                                      fill="#737C90"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 1C5.925 1 1 5.925 1 12C1 18.075 5.925 23 12 23C18.075 23 23 18.075 23 12C23 5.925 18.075 1 12 1ZM3 12C3 14.09 3.713 16.014 4.908 17.542C5.74723 16.4399 6.8299 15.5467 8.07143 14.9323C9.31297 14.3179 10.6797 13.9988 12.065 14C13.4323 13.9987 14.7819 14.3095 16.0109 14.9088C17.2399 15.508 18.316 16.3799 19.157 17.458C20.0234 16.3216 20.6068 14.9952 20.8589 13.5886C21.111 12.182 21.0244 10.7355 20.6065 9.36898C20.1886 8.00243 19.4512 6.75505 18.4555 5.73004C17.4598 4.70503 16.2343 3.93186 14.8804 3.47451C13.5265 3.01716 12.0832 2.88877 10.6699 3.09997C9.25652 3.31117 7.91379 3.85589 6.75277 4.68905C5.59175 5.52222 4.64581 6.61987 3.99323 7.8912C3.34065 9.16252 3.00018 10.571 3 12ZM12 21C9.93395 21.0031 7.93027 20.2923 6.328 18.988C6.97293 18.0647 7.83134 17.3109 8.83019 16.7907C9.82905 16.2705 10.9388 15.9992 12.065 16C13.1772 15.9991 14.2735 16.2636 15.2629 16.7714C16.2524 17.2793 17.1064 18.0159 17.754 18.92C16.1393 20.2667 14.1026 21.0029 12 21Z"
                                      fill="#737C90"/>
                            </svg>
                        </i>
                        <span>{{__("Chat-Inbox")}}</span>
                    </a>
                </li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->


    </div>
</div>
<!-- Left Sidebar End -->

