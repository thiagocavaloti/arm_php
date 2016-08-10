<?php
include_once 'arm/core/interface/ARMSingleton.interface.php';
include_once 'arm/core/interface/ARMManagerItem.interface.php';
include_once 'arm/core/model/ARMDBManager.class.php';
include_once 'arm/core/modules/interface/ARMModule.interface.php';
include_once 'arm/core/model/ARMDbConfig.interface.php';
include_once 'arm/core/modules/ARMBaseModule.abstract.php';
include_once 'arm/core/model/ARMDbConfig.vo.php';
include_once 'arm/core/utils/ARMValidation.class.php';
include_once 'arm/core/modules/database/ARMMysqli.module.php';
include_once 'arm/utils/html/form/FormFieldInfo.vo.php';
include_once 'arm/core/model/ARMData.interface.php';
include_once 'arm/core/model/entity/ARMEntity.interface.php';
include_once 'arm/core/vo/ARMReturnData.vo.php';
include_once 'arm/module/log/arm_log/ArmLog.vo.php';
include_once 'arm/core/modules/translation/ARMTranslator.php';
include_once 'arm/core/model/ARMBaseDAO.abstract.php';
include_once 'arm/core/model/entity/ARMBaseEntity.abstract.php';
include_once 'arm/module/data_module/generic/ARMGeneric.dao.php';
include_once 'arm/module/log/arm_log/bases/ARMBaseArmLog.abstract.php';
include_once 'arm/module/log/arm_log/ArmLog.entity.php';
include_once 'arm/module/data_module/model_maker/ARMModelGateway.interface.php';
include_once 'arm/module/events/cron_event/ARMCronEvent.vo.php';
include_once 'arm/core/utils/ARMDictionary.class.php';
include_once 'arm/module/log/arm_log/bases/ARMBaseArmLog.DAO.php';
include_once 'arm/module/events/cron_event/bases/ARMBaseARMCronEvent.DAO.php';
include_once 'arm/module/events/cron_event/bases/ARMBaseARMCronEvent.abstract.php';
include_once 'arm/module/log/arm_log/ArmLogModel.gateway.php';
include_once 'arm/core/modules/ARMBaseDataModule.abstract.php';
include_once 'arm/module/log/arm_log/ArmLog.DAO.php';
include_once 'arm/module/events/cron_event/ARMCronEvent.entity.php';
include_once 'arm/module/events/cron_event/ARMCronEvent.DAO.php';
include_once 'arm/module/events/ARMEventListenerInfoVO.php';
include_once 'arm/module/log/ARMLogInfo.vo.php';
include_once 'arm/module/log/ARMLog.module.php';
include_once 'arm/module/events/ARMEventReciveInfoVO.php';
include_once 'arm/module/events/listeners_types/ARMListenerArmModuleInfoVO.php';
include_once 'arm/module/events/listeners_types/ARMListenerMethodStringInfoVO.php';
include_once 'arm/module/events/cron_event/ARMCronEventModel.gateway.php';
include_once 'arm/module/events/listeners_types/ARMListenerCallableInfoVO.php';
include_once 'arm/module/events/listeners_types/ARMListenerClassToInstanceInfoVO.php';
include_once 'arm/module/events/ARMEventsModule.php';
/* Class "StaticName" used in "arm/module/events/listeners_types/ARMListenerClassToInstanceInfoVO.php" NOT FOUND 
Class "StaticName" used in "arm/module/events/listeners_types/ARMListenerArmModuleInfoVO.php" NOT FOUND 
Class "MDemoProductDAO" used in "arm/module/events/listeners_types/ARMListenerArmModuleInfoVO.php" NOT FOUND 
Class "Class" used in "arm/core/modules/ARMBaseModule.abstract.php" NOT FOUND 
Class "Class" used in "arm/core/modules/ARMBaseModule.abstract.php" NOT FOUND 
Class "Class" used in "arm/core/modules/ARMBaseModule.abstract.php" NOT FOUND 
Class "Class" used in "arm/core/modules/ARMBaseModule.abstract.php" NOT FOUND 
Class "ReturnDataVO" used in "arm/core/model/ARMBaseDAO.abstract.php" NOT FOUND 
Class "GPSDataCompanyMemberModelGateway" used in "arm/module/log/arm_log/ArmLog.entity.php" NOT FOUND 
Class "GPSDataCompanyMemberModelGateway" used in "arm/module/log/arm_log/ArmLog.entity.php" NOT FOUND 
Class "GPSDataCompanyMemberModelGateway" used in "arm/module/log/arm_log/ArmLog.entity.php" NOT FOUND   */?>