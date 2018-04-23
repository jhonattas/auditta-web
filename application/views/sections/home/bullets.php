<div class="bullets">
    <h3>Compare e encontre o <span class="plano">plano ideal para sua empresa!</span></h3>
    <div class="all-bullets">
        <div class="w-row">
            <div
                class="w-col w-col-4"
                v-for="bullet in bulletList"
                :key="bullet.id">
                <div class="box-bullet">
                    <div class="w-row">
                        <div class="w-col w-col-4">
                            <img class="img-icon" :src="bullet.image">
                        </div>
                        <div class="w-col w-col-6">
                            <p class="text-bullet">{{ bullet.text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>