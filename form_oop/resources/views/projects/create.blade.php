<html>
<head>
    <title>OOP FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<div id="app" class="container">
@include('projects.list')
<form method="post" action="/projects" @submit.prevent="onsubmit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Project Name</label>
        <input type="text" class="form-control" id="name" name="name" v-model="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Project Description</label>
        <input type="text" class="form-control" id="description" name="description" v-model="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="/js/app.js"></script>
</div>
</body>
</html>
