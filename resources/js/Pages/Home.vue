<template>
  <PagesLayout>
        <template #header>
            <h2 class="font-semibold text-lg text-yellow-200 leading-tight px-5">
                Chat de Usuários
            </h2>
        </template>
        <template>
            <div class="">

                <div class="w-11/12 mx-auto mt-32 flex items-center justify-center">
                    <div class="w-10/12 mx-10 text-white">
                        <p class="text-xl font-semibold">Bem vindo(a)!</p>
                        <p class="text-justify">Para usufruir melhor do projeto, e poder enviar mensagens, emojis, e muito mais,
                            voce precisa apenas se cadastrar, e o Chat será aberto automaticamente!</p>
                            <p>É um projeto OpenSource que voce pode se divertir, ou até mesmo expandi-lo.</p>
                            <p>Use a sua imaginação e o mais importante, divirta-se!!!</p>
                    </div>
                    <iframe class="w-full h-96" src="https://www.youtube-nocookie.com/embed/FMrtSHAAPhM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </template>
  </PagesLayout>
</template>
<script>
import PagesLayout from '@/Layouts/PagesLayout'

export default {
    components:{
        PagesLayout
    }
}
</script>


