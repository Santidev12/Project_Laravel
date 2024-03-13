<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    
    @auth
    <div class="flex justify-between">
        
        <form  action="/" method="POST">
            @csrf
            @method('GET')
            <button
            class="mx-5 mt-5 font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
            >All Posts</button>
        </form>
        <form  action="/logout" method="POST">
            @csrf
            <button
            class="mx-5 mt-5 font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
            >Logout</button>
        </form>
    </div>


    <div class="bg-black text-white flex min-h-screen flex-col items-center sm:pt-0">
        <div class="relative mt-12 w-full max-w-lg sm:mt-10">
            <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"
                bis_skin_checked="1"></div>
        <div
        class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
        <div class="flex flex-col p-6">
            <h3 class="text-xl font-semibold leading-6 tracking-tighter">Create New Post</h3>
        </div>
        <div class="p-6 pt-0">
            <form action="/create-post" method="POST">
                @csrf
                <div>
                    <div>
                        <div
                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                            <div class="flex justify-between">
                                <label
                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Title</label>
                                
                            </div>
                            <input type="text" name="title" placeholder="Post Title"
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
                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Body</label>
                            </div>
                            <div class="flex items-center">
                                <textarea name="body" placeholder="Body content..."
                                    class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 sm:leading-7 text-foreground"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div>
                        <div
                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                            <div class="flex justify-between">
                                <label
                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Body</label>
                            </div>
                            <div class="flex items-center">
                                <input type="file" name="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="mt-8 flex items-center justify-start gap-x-2">
                    <button
                        type="submit" class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                        >Create</button>                         
                </div>           
            </form>
        </div>
        </div>
    </div>
    <div class="bg-black">
    <div class="flex flex-col justify-start w-full ">
        <h1 class="text-white text-4xl m-12 font-bold">My Posts</h1>
        <div class="flex flex-row ">
            @foreach ($posts as $post)
                    <div class="mx-10 max-w-xs container  rounded-xl shadow-lg shadow-cyan-500/50 transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/50">
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
                            <span>22</span>
                          </div>
                          <div class="flex space-x-1 ">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500 hover:text-red-400 transition duration-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                            </span>
                            <span>20</span>
                            
                          </div>
                        </div>
                          <div class="flex max-w-md ">
                            
                              <a href="/edit-post/{{$post->id}}" >
                            <button>
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                  </svg>
                                </button>
                            </a>
                            <form action="/delete-post/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="items-center">
                                <svg class="w-6 h-6 text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>
                              </button>                    
                            </form>      
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  @else
                  <!-- component -->
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
        </div>
@endauth
      
</body>
</html>