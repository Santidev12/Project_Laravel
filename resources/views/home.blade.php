<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">

    @auth
    <div class="bg-black">
        <div class="flex justify-between">
           
            <form  action="/myposts" method="POST">
                @csrf
                @method('GET')
                <button
                class="mx-5 mt-5 font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                >My Posts</button>
            </form>
            <form  action="/logout" method="POST">
                @csrf
                <button
                class="mx-5 mt-5 font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                >Logout</button>
            </form>
        </div>
   
   
         
   
    <div class="flex flex-col justify-start w-full ">
        <h1 class="text-white text-4xl m-12 font-bold">All Posts</h1>
        <div class="flex flex-wrap ">
            @foreach ($posts as $post)
                    <div class="mx-10 mb-12 max-w-xs container  rounded-xl shadow-lg shadow-cyan-500/50 transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/50">
                      <div>
                        <h1 class="text-2xl mt-2 ml-4 font-bold text-slate-100 cursor-pointer hover:text-slate-300 transition duration-100 capitalize">{{$post['title']}}</h1>
                        <p class="ml-4 mt-1 mb-2 text-slate-100">by <span class="capitalize">{{$post->user->name}}</span></p>
                      </div>
                      <div class="flex flex-col p-4 justify-between w-full">
                        <div class="flex items-center mb-5">
                          <h2 class="text-slate-100 font-light cursor-pointer">{{$post['body']}}</h2>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex space-x-3">
                          <div class="flex space-x-1 ">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                              </svg>
                            </span>
                            <span class="text-white">22</span>
                          </div>
                          <div class="flex space-x-1 ">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500 hover:text-red-400 transition duration-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                            </span>
                            <span class="text-white">20</span>
                            
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
    </div>
   
</div>
    @else
            <div class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
                
                    <div class="text-foreground font-semibold text-2xl tracking-tighter mx-auto flex items-center gap-2">
                        Welcome
                    </div>
                </a>
                <div class="relative mt-12 w-full max-w-lg sm:mt-10">
                    <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"
                        bis_skin_checked="1"></div>
                    <div
                        class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
                        <div class="flex flex-col p-6">
                            <h3 class="text-xl font-semibold leading-6 tracking-tighter">Register</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <form action="/register" method="POST">
                                @csrf
                                <div>
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Name</label>
                                                
                                            </div>
                                            <input type="text" name="name" placeholder="Name"
                                                autocomplete="off"
                                                class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Email</label>
                                                
                                            </div>
                                            <input type="email" name="email" placeholder="Email"
                                                autocomplete="off"
                                                class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="password" name="password"
                                                    class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 sm:leading-7 text-foreground">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-8 flex items-center justify-center gap-x-2">
                                    
                                    <button
                                        class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                                        >Register</button>
                                        <br>
                                        
                                </div>
                                
                            
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-center my-5">
                        <p> Or</p>
                            </div>
                    <div
                        class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
                        <div class="flex flex-col p-6">
                            <h3 class="text-xl font-semibold leading-6 tracking-tighter">Login</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <form action="/login" method="POST">
                                @csrf
                                <div>
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Name</label>
                                                
                                            </div>
                                            <input type="text" name="loginname" placeholder="Name"
                                                autocomplete="off"
                                                class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="password" name="loginpassword"
                                                    class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 sm:leading-7 text-foreground">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-8 flex items-center justify-center gap-x-2">
                                    
                                    <button
                                        class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                                        >Login</button>
                                        <br>
                                        
                                </div>
                                
                            
                                <div class="flex justify-center mt-3">
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    @endauth
 
</body>
</html>