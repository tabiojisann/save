<template>
  <div>
    <div class="md-form my-0 mt-5">
      <input name="keyword" v-model="keyword" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" required>
    </div>
    <button class="btn btn-unique mt-5" style="border-radius: 30px;"><i class="far fas fa-search"> Search</i></button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      keyword: ''
    }
  }
}
</script>


