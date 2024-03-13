<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
  
    <div class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
        <div class="relative mt-12 w-full max-w-lg sm:mt-10">
            <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"
                bis_skin_checked="1"></div>
            <div
                class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
                <div class="flex flex-col p-6">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter">Edit Post</h3>
                </div>
                <div class="p-6 pt-0">
                            <form action="/edit-post/{{$post->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    <div>
                                        <div
                                            class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                            <div class="flex justify-between">
                                                <label
                                                    class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Title</label>
                                                
                                            </div>
                                            <input type="text" name="title" value="{{$post->title}}"
                                            class="mt-2 bg-transparent text-sm group-focus-within:text-white text-white">
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
                                                <textarea name="body" rows="5"
                                                class="text-white block w-full border-0 bg-transparent p-0 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">{{$post->body}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-8 flex items-center justify-center gap-x-2">
                                    
                                    <button
                                        class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                                        >Save changes</button>
                                        <br>
                                        
                                </div>
                                
                            
                                <div class="flex justify-center mt-3">
                                
                                </div>
                            </form>
                        </div>
                    </div>
    </div>
</form>
</body>
</html>