<div id="editKnowledgeModal-<?= $ExpertSystem['id'] ?>" tabindex="-1" aria-labelledby="editKnowledgeModal-<?= $ExpertSystem['id'] ?>Label" aria-hidden="true" class="_31P-8 _3bCgx">
  <div class="_28U8K _2h0Jb">
    <div class="_2M5QZ _1wCNj _3LA0v _1HTfk s0VLt">
      <form id="editKnowledgeForm-<?= $ExpertSystem['id'] ?>" method="post">
        <div class="_3tByX _1jkJg">
          <button type="button" data-dismiss="modal" aria-label="Close" class="_2yuh-"></button>
          <div class="_1dTWr _3x-l5 _1HqFl _3mxtc">
            <h5 class="_3znGg">Edit <strong>Knowledge Base</strong></h5>
          </div>

          <div class="_3Sail">
            <div class="_18uPx _14vxW _3e0Cs _2kea1 _3x-l5">
              <svg width="24" height="24" fill="currentColor" class="_2i-WK">
                <use xlink:href="<?= ROOT ?>/assets/bootstrap-icons/bootstrap-icons.svg#patch-check-fll" />
              </svg>
              <h6 class="_10lSW _1x6Xu"><strong>Solving Path</strong></h6>
            </div>
            <div class="_3BRUK">
              <div class="_2E95Y riVBJ">
                <input disabled="" id="knowledge<?= $ExpertSystem['id'] ?>" name="knowledge" type="text" class="_1y8Oi" />
                <span data-error="" data-success="" class="_25Y7w"></span>
              </div>
            </div>
          </div>

          <div class="_3Sail">
            <div class="_18uPx _14vxW _3e0Cs _2kea1 _3x-l5">
              <svg width="24" height="24" fill="currentColor" class="_2i-WK">
                <use xlink:href="<?= ROOT ?>/assets/bootstrap-icons/bootstrap-icons.svg#card-checklist" />
              </svg>
              <h6 class="_10lSW _1x6Xu"><strong>Symptoms</strong></h6>
            </div>
            <div class="_3BRUK">
              <div class="_2E95Y riVBJ">
                <select multiple="" name="symptoms[]" id="symptoms<?= $ExpertSystem['id'] ?>">
                  <?php if ($symptoms::findAll(['expertSystemId' => $ExpertSystem['id']])) : ?>
                    <?php foreach ($symptoms::findAll(['expertSystemId' => $ExpertSystem['id']]) as $symptom) : ?>
                      <option value="<?= $symptom['id'] ?>"><?= $symptom['name'] ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
                <label>Symptoms</label>
              </div>
            </div>
          </div>

          <div class="_3Sail _3x-l5 riVBJ gqtmr">
            <div class="_-1QSV _3HVzZ _1dTWr _1JVHC">
              <button type="button" data-dismiss="modal" class="_2niE6 _2-EzS">Close</button>
              <button type="submit" class="_2niE6 _2-EzS Bdn6B _1dTWr _2kea1 _3x-l5">
                <span style="width: 1rem; height: 1rem" role="status" class="_8sneY _2f2YP _14vxW"></span>
                <span>Edit Knowledge Base</span>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>