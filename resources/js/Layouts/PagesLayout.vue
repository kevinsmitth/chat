<template>
    <div>
        <header>
            <div class="w-full h-20 bg-indigo-900 flex items-center border-b border-yellow-200">
                <div class="w-3/12">
                    <slot  name="header"></slot>
                </div>
                <div class="w-6/12">
                    <a :href="route('home')">
                        <img class="mx-auto" :src="'/images/ks.png'" alt="ks-logo" width="60" height="48">
                    </a>
                </div>
                <div class="w-3/12">
                    <ul class="float-right flex mr-5">
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
                        <template v-if="user">
                            <li class="mx-3">
                                <a class="text-white hover:text-yellow-300"
                                :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </a>
                            </li>
                            <li class="mx-3">
                                <a class="text-white hover:text-yellow-300"
                                :href="route('profile.show')" :active="route().current('profile.show')">
                                    Perfil
                                </a>
                            </li>

                            <li class="mx-3">
                                <form method="POST" @submit.prevent="logout">
                                    <button class="text-white hover:text-yellow-300" as="button">
                                        Sair
                                    </button>
                                </form>
                            </li>
                        </template>
                        <template v-else>
                            <li class="mx-3">
                                <a class="text-white hover:text-yellow-300"
                                :href="route('register')" :active="route().current('register')">
                                    Cadastrar
                                </a>
                            </li>
                            <li class="mx-3">
                                <a class="text-white hover:text-yellow-300"
                                :href="route('login')" :active="route().current('login')">
                                    Entrar
                                </a>
                            </li>
                        </template>
                    </ul>
                </div>
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
<script>

export default {
    data() {
        return {
            now: new Date().getFullYear(),
            user:null,
        }

    },
    methods: {

        logout() {
            axios.post(route('logout').url()).then(response => {
                window.location = '/';
            })
        },

    },
    mounted() {

            axios.get(route('user.me').url()).then(response => {
                this.user = response.data.user

            })

    },
}
</script>
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
:active{
    @apply text-yellow-300;
    color: #fac533 !important;
}
</style>
