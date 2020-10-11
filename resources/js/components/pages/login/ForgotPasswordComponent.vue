<template>
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info">
							<p class="m-none text-weight-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
						</div>

						<form>
							<div class="form-group mb-none">
								<div class="input-group">
									<input name="username" type="email" placeholder="E-mail" class="form-control input-lg" />
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
									</span>
								</div>
							</div>

							<p class="text-center mt-lg">Remembered?
                             	<router-link class="pull-right" :to="{ name: 'login'}">Sign In!</router-link>
                             </p>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. All Rights Reserved.</p>
			</div>
		</section>
</template>

<script>
    export default {
        mounted() {
            console.log('Forgot password Component mounted.')
        }
    }
</script>

<style scoped>

</style>