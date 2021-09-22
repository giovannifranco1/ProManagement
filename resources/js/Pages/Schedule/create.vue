<template>
  <AppLayouts>
    <template v-slot:Content>
      <form
        @submit.prevent="handlerForm"
        class="flex w-full m-auto max-w-2xl lg:max-w-6xl space-x-5"
      >
        <div
          class="
            w-full
            max-w-2xl
            lg:max-w-6xl
            px-5
            py-10
            m-auto
            mt-10
            bg-white
            backdrop-filter
            rounded-lg
            shadow
            dark:bg-gray-800
          "
        >
          <div
            class="
              mb-6
              text-3xl
              font-semibold
              text-center text-gray-800
              dark:text-white
              animate-bounce
            "
          >
            New Schedule
          </div>
          <div
            v-for="(schedule, key) in schedules"
            :key="key"
            class="grid max-w-5xl grid-cols-12 gap-4 m-auto"
          >
            <div class="col-span-5 xl:col-span-5">
              <div class="relative">
                <label for="time" class="block font-semibold text-lg"
                  >Time *</label
                >
                <input
                  type="time"
                  id="time"
                  class="
                    rounded-lg
                    border-transparent
                    flex-1
                    appearance-none
                    border-1 border-gray-400
                    w-full
                    py-2
                    px-4
                    bg-white
                    text-gray-700
                    placeholder-gray-400
                    shadow-sm
                    text-base
                    focus:outline-none
                    focus:ring-2 focus:ring-purple-600
                    focus:border-transparent
                  "
                  placeholder="Name"
                  v-model="schedule.time"
                />
              </div>
            </div>
            <div class="col-span-5 lg:col-span-5">
              <div class="relative">
                <label for="description" class="block text-lg font-semibold"
                  >Description *</label
                >
                <input
                  type="text"
                  id="description"
                  class="
                    rounded-lg
                    border-transparent
                    flex-1
                    appearance-none
                    border border-gray-400
                    w-full
                    py-2
                    px-4
                    bg-white
                    text-gray-700
                    placeholder-gray-400
                    shadow-sm
                    text-base
                    focus:outline-none
                    focus:ring-2 focus:ring-purple-600
                    focus:border-transparent
                  "
                  v-model="schedule.description"
                  placeholder="description"
                />
              </div>
            </div>
            <div class="col-span-2">
              <svg
                width="10"
                height="10"
                class="
                  mt-9
                  w-full
                  h-6
                  m-auto
                  text-indigo-500
                  hover:text-indigo-300
                  cursor-pointer
                "
                fill="currentColor"
                viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg"
                @click="removeShedules(key)"
              >
                <path
                  d="M704 1376v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm256 0v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm256 0v-704q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v704q0 14 9 23t23 9h64q14 0 23-9t9-23zm-544-992h448l-48-117q-7-9-17-11h-317q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5h-832q-66 0-113-58.5t-47-141.5v-952h-96q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z"
                ></path>
              </svg>
            </div>
          </div>
          <div class="grid max-w-4xl grid-cols-2 gap-4 m-auto">
            <div class="col-span-2 lg:col-span-1">
              <span
                class="
                  text-blue-500 text-lg
                  font-extrabold
                  rounded-full
                  px-1
                  cursor-pointer
                  hover:text-red-700
                "
                @click="addSchedules"
                >+</span
              >
            </div>
            <div class="col-span-2 text-right">
              <button
                type="submit"
                class="
                  py-2
                  px-4
                  bg-indigo-600
                  hover:bg-indigo-700
                  focus:ring-indigo-500 focus:ring-offset-indigo-200
                  text-white
                  w-full
                  transition
                  ease-in
                  duration-200
                  text-center text-base
                  font-semibold
                  shadow-md
                  focus:outline-none
                  focus:ring-2 focus:ring-offset-2
                  rounded-lg
                "
              >
                Save
              </button>
            </div>
          </div>
        </div>
      </form>
    </template>
  </AppLayouts>
</template>

<script>
export default {
  data() {
    return {
      schedules: [
        {
          time: null,
          description: null,
        },
      ],
    };
  },
  methods: {
    addSchedules() {
      this.schedules.push({ time: null, description: null });
    },
    removeShedules(key) {
      this.schedules.splice(key, 1);
    },
    handlerForm() {
      // this.$inertia.post(route())
    },
  },
};
</script>

<style>
</style>
