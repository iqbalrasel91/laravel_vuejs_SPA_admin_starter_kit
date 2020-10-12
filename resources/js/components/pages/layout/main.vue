<template>
	<section class="body">

			<!-- start: header -->
			  <app-header></app-header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<AppSidebar></AppSidebar>
				<!-- end: sidebar -->
				<router-view></router-view>

			</div>


		</section>
</template>

<script>
    import AppHeader from './header.vue'
    import AppSidebar from './sidebar.vue'
    export default {
       data(){
            return {
              
            }
        },

       components: {
            AppHeader, AppSidebar
        },
	 methods: {
		loginlayout() {
			if(this.$route.path("/") || this.$route.path("/login")) {
			this.homePage = true
			} else {
			this.homePage = false
			}
		}
    }



    }
</script>

