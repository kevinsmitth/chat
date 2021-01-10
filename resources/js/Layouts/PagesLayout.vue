<template>
    <div>
        <header>
            <div class="w-full h-20 bg-indigo-900 flex items-center border-b border-yellow-200">
                <slot name="header"></slot>
                <nav class="ml-auto">
                    <ul class="flex mr-5">
                        <li class="mx-3">
                            <a class="text-white hover:text-yellow-300"
                            :href="route('home')" :active="route().current('home')">
                                Início
                            </a>
                        </li>
                        <li class="mx-3">
                            <a class="text-white hover:text-yellow-300"
                            :href="route('chat')" :active="route().current('chat')">
                                Chat
                            </a>
                        </li>
                        <li class="mx-3">
                            <a class="text-white hover:text-yellow-300"
                            :href="route('login')" :active="route().current('login')">
                                Entrar
                            </a>
                        </li>
                        <li class="mx-3" v-if="user">
                            <a class="text-white hover:text-yellow-300"
                            :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </a>
                        </li>
                        <li class="mx-3" v-if="user">
                            <a class="text-white hover:text-yellow-300"
                            :href="route('profile.show')" :active="route().current('profile.show')">
                                Perfil
                            </a>
                        </li>

                        <li class="mx-3" v-if="user">
                            <form method="POST" @submit.prevent="logout">
                                <button class="text-white hover:text-yellow-300" as="button">
                                    Sair
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <slot></slot>
        </main>

        <footer>
            <div class="flex items-center bg-indigo-900 h-28 border-t border-yellow-200">
                <div class="mx-auto">
                    <h1 class="self-center text-white">Copyright {{ now }} - Kevin Smith</h1>
                </div>
            </div>
        </footer>

    </div>
</template>
<style>

html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    background-color: #42389D;
}

footer{
    width: 100%;
    bottom: 0;
    position: absolute;
}
</style>
<script>

export default {
    data() {
        return {
            now: new Date().getFullYear(),
        }
    },
    methods: {

        logout() {
            axios.post(route('logout').url()).then(response => {
                window.location = '/';
            })
        },
    },
    meteor:{
        user(){
            return Meteor.user()
        }
    }
}
</script>
