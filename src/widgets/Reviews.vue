<template>
  <div id="reviews" class="reviews container">
    <div class="reviews-inner">
      <h2>Отзывы</h2>
      <div class="review-content">
        <div class="review-item">
          <div class="image-wrapper">
            <img src="@/shared/images/reviews/1.jpg" alt="review" />
          </div>
        </div>
        <div class="review-item">
          <div class="image-wrapper">
            <img src="@/shared/images/reviews/2.jpg" alt="review" />
          </div>
        </div>
        <div class="review-item">
          <div class="image-wrapper">
            <img src="@/shared/images/reviews/3.jpg" alt="review" />
          </div>
        </div>
        <div class="review-item">
          <div class="image-wrapper">
            <img src="@/shared/images/reviews/4.jpg" alt="review" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.reviews {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .reviews-inner {
    h2 {
      font-family: "Cygre ", sans-serif;
      color: var(--dark-color);
      font-weight: 600;
      font-size: 48px;
      line-height: 48px;
      margin-bottom: 40px;
      padding-left: 30px;

      @media (max-width: $tab) {
        margin-bottom: 20px;
        font-size: 28px;
        line-height: 28px;
        padding-left: 0;
      }
    }
    .review-content {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      @media (max-width: $tab) {
        grid-template-columns: repeat(1, 1fr);
        gap: 10px;
      }
      .review-item {
        padding: 30px;
        background: var(--white-color);
        border-radius: 40px;
        @media (max-width: $tab) {
          border-radius: 20px;
          padding: 20px;
        }
        .image-wrapper {
          width: 100%;
          height: 100%;
          img {
            width: 100%;
            height: 100%;
            object-fit: contain;
          }
        }
      }
    }
  }
}
</style>
