<?php

namespace Ksolves\BannerSlider\Controller\Adminhtml\BannerImage;

use Magento\Framework\App\Action\Context;
use Ksolves\BannerSlider\Model\BannerSliderImageFactory;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Framework\Image\AdapterFactory;
use Magento\Framework\Filesystem;


class Save extends \Magento\Framework\App\Action\Action
{
    protected $test;
    protected $uploaderFactory;
    protected $adapterFactory;
    protected $filesystem;

    public function __construct(
        Context $context,
        BannerSliderImageFactory $test,
        UploaderFactory $uploaderFactory,
        AdapterFactory $adapterFactory,
        Filesystem $filesystem
    ) {
        $this->test = $test;
        $this->uploaderFactory = $uploaderFactory;
        $this->adapterFactory = $adapterFactory;
        $this->filesystem = $filesystem;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $postData = $this->test->create();
     // echo "<pre>";
     // print_r($data);
     // exit();
 
     
          $data = $data['path'][0]['url'];

          $db =['path'=> $data,'banner_id' => 1];
          $postData->setData($db);

     //    print_r($data);
     //    exit();

        if($postData->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
     
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('banner/bannerimage/index');
        
        return $resultRedirect;
     }
  

}


// public function execute()
// {
//      if ($this->getRequest()->isPost()) {
//           $input = $this->getRequest()->getPostValue();
//           $postData = $this->_customerFactory->create();
//           if (isset($input['path'])) {
//                $id = $input['path'];
//           } else {
//                $id = 0;
//           }
//           if($id != 0){
//                $postData->load($id);
//                $postData->addData($input);
//                $postData->setId($id);
//                $postData->save();
//           }else{
//                $postData->setData($input)->save();
//           }
//           $this->messageManager->addSuccessMessage("Data added successfully!");
//           return $this->_redirect('Curd/index/index');
//      }
//      return $this->_redirect('Curd/index/index');
// }
// }
    //    echo "<pre>";
     //    print_r($data);
     //    exit();
     //    if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
     //        try{
     //            $uploaderFactory = $this->uploaderFactory->create(['fileId' => 'image']);
     //            $uploaderFactory->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
     //            $imageAdapter = $this->adapterFactory->create();
     //            $uploaderFactory->addValidateCallback('custom_image_upload',$imageAdapter,'validateUploadFile');
     //            $uploaderFactory->setAllowRenameFiles(true);
     //            $uploaderFactory->setFilesDispersion(true);
     //            $mediaDirectory = $this->filesystem->getDirectoryRead(DirectoryList::MEDIA);
     //            $destinationPath = $mediaDirectory->getAbsolutePath('media/image');
     //            $result = $uploaderFactory->save($destinationPath);
     //            if (!$result) {
     //                throw new LocalizedException(
     //                    __('File cannot be saved to path: $1', $destinationPath)
     //                );
     //            }
     //            $imagePath = 'vky/test'.$result['file'];
     //            $data['image'] = $imagePath;
     //        } catch (\Exception $e) {
     //        }
     //    }
     //    $test = $this->_test->create();

     //    $test->setData($data);
     // //    echo "<pre>";
     // //    print_r($test);
     // //    exit();